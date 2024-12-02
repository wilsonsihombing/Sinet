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

        return redirect()->back()->with('success', 'Pertanyaan berhasil dikirim.');
    }

    public function showQuestions() 
    {
        $questions = QnA::with('user')->paginate(10); // Menampilkan 10 pertanyaan per halaman
        return view('pages.qna', compact('questions'));
    }

    public function answerPage($id)
    {
        $question = QnA::with('user', 'answeredBy')->find($id);

        if (!$question) {
            return redirect()->route('qna')->withErrors(['Pertanyaan tidak ditemukan.']);
        }

        return view('pages.jawaban', compact('question'));
    }

    public function submitAnswer(Request $request, $id)
    {
    $request->validate([
        'answer' => 'required|string|max:5000',
    ]);

    $question = QnA::find($id);

    if (!$question) {
        return redirect()->route('qna')->withErrors(['Pertanyaan tidak ditemukan.']);
    }

    // Update jawaban
    $question->update([
        'answer' => $request->input('answer'),
        'answered_by' => auth()->id(), // ID pengguna yang memberikan jawaban
    ]);

    return redirect()->route('qna')->with('success', 'Jawaban berhasil disimpan.');
    }

}