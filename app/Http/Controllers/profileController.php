<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(Request $request){
        return view('pages.profile');
    }

    public function edit(){
        return view('pages.editprofile');
    }

}
