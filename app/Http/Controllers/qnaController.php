<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QnA;


class qnaController extends Controller
{
    public function index(Request $request){
        return view('pages.qna');
    }

    public function answer(Request $request){
        return view('pages.jawaban');
    }

    public function seeAnswer(Request $request){
        return view('pages.seeAnswer');
    }
    
    public function store(Request $request)
    {
        // Validasi data dengan pesan kustom
    $request->validate([
        'question' => 'required|string|max:255',
    ], [
        'question.required' => 'Pertanyaan tidak boleh kosong.',
        'question.max' => 'Pertanyaan maksimal 255 karakter.',
    ]);

        // Simpan data ke database
        QnA::create([
            'question' => $request->input('question'),
            'posted_by' => auth()->id(), // Menggunakan ID pengguna yang login
        ]);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Pertanyaan berhasil dikirim.');
    }

    public function showQuestions() 
    {
    // Ambil semua data pertanyaan dari database
    $questions = QnA::with('user')->get();

    // Arahkan data ke view
    return view('pages.qna', compact('questions'));

    $questions = QnA::with('user')->paginate(10); // Menampilkan 10 pertanyaan per halaman
    return view('pages.qna', compact('questions'));
}

}