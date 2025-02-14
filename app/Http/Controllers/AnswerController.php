<?php

namespace App\Http\Controllers;

use App\Models\Answer;
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
