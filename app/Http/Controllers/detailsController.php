<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventPackage;

class detailsController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = EventPackage::with(['galleryEvents'])->where('slug', $slug)->firstOrFail();
        return view('pages.detail', [
            'item' => $item
        ]);
    }
}
