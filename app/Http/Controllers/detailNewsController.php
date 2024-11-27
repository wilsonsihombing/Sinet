<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class detailNewsController extends Controller
{
     public function index($slug)
    {
        // Mengambil berita berdasarkan slug
        $news = News::where('slug', $slug)->firstOrFail();

        // Mengambil berita terbaru untuk sidebar
        $latestNews = News::latest()->take(5)->get();

        // Mengirimkan data berita dan berita terbaru ke tampilan
        return view('pages.detailNews', compact('news', 'latestNews'));
    }
}
