<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class programController extends Controller
{
     // Menampilkan halaman Program Kerohanian
     public function kerohanian(){
        return view('pages.programkerohanian');
    }

    // Menampilkan halaman Program Humas
    public function humas(){
        return view('pages.programhumas');
    }

    // Menampilkan halaman Program Kesenian
    public function kesenian(){
        return view('pages.programkesenian');
    }

    // Menampilkan halaman Program Pendidikan
    public function pendidikan(){
        return view('pages.programpendidikan');
    }
}
