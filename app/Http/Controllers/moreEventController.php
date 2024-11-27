<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventPackage;

class moreEventController extends Controller
{
    public function index(Request $request)
    {
        // Inisialisasi query builder untuk EventPackage
        $query = EventPackage::with('galleryEvents');

        // Periksa apakah ada input pencarian dan filter berdasarkan judul event
        if ($search = $request->input('search')) {
            $query->where('title', 'like', '%' . $search . '%'); // Menyesuaikan pencarian pada kolom 'title'
        }

        // Ambil data dengan filter pencarian jika ada dan lakukan pagination
        $items = $query->paginate(8); // Pagination dengan 8 item per halaman

        // Kembalikan view dengan data event
        return view('pages.moreEvents', [
            'items' => $items
        ]);
    }
}
