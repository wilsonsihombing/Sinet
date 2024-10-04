<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class moreEventController extends Controller
{
    public function index(Request $request){
        return view('pages.moreEvents');
    }
}
