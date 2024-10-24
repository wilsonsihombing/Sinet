<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
}
