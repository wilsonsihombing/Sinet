<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailsController extends Controller
{
    public function index(Request $request){
        return view('pages.detail');
    }
}