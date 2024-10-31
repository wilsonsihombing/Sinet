<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventPackage;

class moreEventController extends Controller
{
    public function index(Request $request){
        $items = EventPackage::with(['galleryEvents'])->get();
        return view('pages.moreEvents',[
            'items' => $items
        ]);
    }
}
