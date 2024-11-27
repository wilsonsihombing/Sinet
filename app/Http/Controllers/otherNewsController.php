<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class otherNewsController extends Controller
{
    public function index(Request $request)
    {
        // Ambil query pencarian jika ada
        $searchQuery = $request->input('search');

        // Ambil berita dengan pagination dan filter berdasarkan search query
        $news = News::when($searchQuery, function ($query, $searchQuery) {
            return $query->where('title', 'like', '%' . $searchQuery . '%')
                         ->orWhere('body', 'like', '%' . $searchQuery . '%');
        })->latest()->paginate(5);

        return view('pages.otherNews', compact('news'));
    }
}
