<?php

namespace App\Http\Controllers;

use App\Models\CareerInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class infoKarierController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua data info karier yang belum dihapus (menggunakan soft delete)
        $careerInfos = CareerInfo::all(); 

        // Kirim data ke view
        return view('pages.infokarier', compact('careerInfos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'posted_date' => 'required|date',
            'expired_date' => 'nullable|date',
        ]);

        $infoKarier = CareerInfo::create([ // Gunakan model CareerInfo
            'title' => $request->title,
            'description' => $request->description,
            'posted_date' => $request->posted_date,
            'expired_date' => $request->expired_date,
            'posted_by' => Auth::user()->id, // Ambil user yang sedang login
        ]);

        if ($infoKarier) {
            return view('pages.infokarier', ['success' => 'Info karier berhasil disimpan']);
        } 

        return view('pages.infokarier', ['error' => 'Info karier gagal disimpan']);
    }
}
