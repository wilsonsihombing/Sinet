<?php

namespace App\Http\Controllers;

use App\Models\UpcomingEvent;
use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $items = UpcomingEvent::all();
        // Mengambil 4 berita terbaru
        $newsItem = News::latest()->take(4)->get();

        return view('pages.home', [
            'items' => $items,
            'newsItem' => $newsItem
        ]);
    }
}
