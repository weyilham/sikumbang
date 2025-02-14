<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Children;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    public function index(){
        return view('kuisioner', [
            'childrens' => Children::all()
        ]);
    }
    
    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'parent_name' => 'required',
            'birth_date' => 'required|date',
            'gender' => 'required',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'address' => 'required',
            'phone_number' => 'required',
        ]);
    
        // Hitung umur dalam bulan
        $birthDate = Carbon::parse($request->birth_date);
        $ageInMonths = $birthDate->diffInMonths(Carbon::now());
    
        if ($validate) {
            // Simpan data anak tanpa menyimpan kategori
            $children = new Children();
            $children->name = $request->name;
            $children->parent_name = $request->parent_name;
            $children->birth_date = $request->birth_date;
            $children->gender = $request->gender;
            $children->height = $request->height;
            $children->weight = $request->weight;
            $children->address = $request->address;
            $children->phone_number = $request->phone_number;
            $children->save();
    
            // Cari kategori sesuai umur setelah anak disimpan
            $category = Category::with('questions')->where('min_age', '<=', $ageInMonths)
                                ->where('max_age', '>', $ageInMonths)
                                ->first();
            
            
            if($category->id){
                $quetions = $category->questions;
            }

            // dd($quetions);
    
            return redirect('/#kuisioner')->with([
                'success' => 'Data berhasil disimpan',
                'children_id' => $children->id,
                'categoryName' => $category->name,
                'quetions' => $quetions ? $quetions : 'quisioner tidak ditemukan' // Mengirim kategori ke view
            ]);
        }
    }
}
