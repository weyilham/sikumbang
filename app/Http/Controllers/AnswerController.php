<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'child_id' => 'required|exists:childrens,id',
            'answers' => 'required|array',
            'answers.*' => 'in:yes,no',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validasi gagal!',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Simpan jawaban ke database
            foreach ($request->answers as $questionId => $answer) {
                Answer::updateOrCreate(
                    [
                        'children_id' => $request->child_id,
                        'question_id' => $questionId
                    ],
                    ['answer' => $answer]
                );
            }


            // Hitung jumlah jawaban "Ya" dan "Tidak"
            $yesCount = Answer::where('children_id', $request->child_id)
                ->where('answer', 'yes')
                ->count();
            $noCount = Answer::where('children_id', $request->child_id)
                ->where('answer', 'no')
                ->count();
            
            $dataReport = [];
            
            
            if($yesCount >= 9) {
                $dataReport = [
                    'children_id' => $request->child_id,
                    'value' => 'Sesuai umur',
                    'description' => 'Selamat! Anak Anda berkembang dengan sangat baik sesuai usianya. Teruskan stimulasi yang sudah dilakukan agar perkembangannya semakin optimal. Jangan lupa untuk memberikan pujian dan kasih sayang agar anak semakin percaya diri. Jadwalkan pemeriksaan berikutnya sesuai anjuran ya, Bu/Pak!'
                ];
            } else if($yesCount >= 6 && $yesCount < 9) {
                $dataReport = [
                    'children_id' => $request->child_id,
                    'value' => 'Meragukan',
                    'description' => 'Perkembangan anak Anda sudah cukup baik, tapi masih ada beberapa hal yang perlu diperhatikan. Cobalah untuk lebih sering memberikan stimulasi dengan penuh kasih sayang agar perkembangannya semakin optimal. Kami akan mengajarkan beberapa cara sederhana untuk membantu anak belajar dan berkembang. Jangan lupa untuk kembali dalam 2 minggu untuk pemeriksaan ulang. Jika perkembangannya masih meragukan, kami akan membantu merujuk ke dokter spesialis agar anak mendapatkan perhatian lebih lanjut.'
                ];
            } else {
                $dataReport = [
                    'children_id' => $request->child_id,
                    'value' => 'Ada kemungkinan penyimpangan!',
                    'description' => 'Kami melihat bahwa perkembangan anak Anda membutuhkan perhatian lebih. Jangan khawatir, yang terpenting adalah memberikan dukungan dan stimulasi yang tepat. Kami menyarankan untuk segera berkonsultasi dengan dokter spesialis tumbuh kembang di rumah sakit rujukan agar anak mendapatkan penanganan terbaik sesuai kebutuhannya. Semakin cepat ditangani, semakin baik untuk perkembangan anak ke depannya.'
                ];
            }

            // dd($dataReport);



            Report::insert($dataReport);


            return response()->json([
                'status' => 'success',
                'message' => 'Jawaban berhasil disimpan!',
                'data' => [
                    'total_yes' => $yesCount,
                    'total_no' => $noCount
                ]
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menyimpan data!',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
