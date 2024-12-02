<?php

namespace App\Http\Controllers\API;

use App\Models\CareerInfo; // Gunakan model CareerInfo
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class infoKarierController extends Controller
{
    // 1. Menampilkan semua data info karier
    public function index()
    {
        $infoKarier = CareerInfo::all(); // Gunakan model CareerInfo
        return response()->json($infoKarier, 200);
    }

    // 2. Menambahkan info karier baru
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
            'posted_by' => Auth::id(), // Ambil user yang sedang login
        ]);

        return response()->json(['message' => 'Info karier berhasil ditambahkan.', 'data' => $infoKarier], 201);
    }

    // 3. Menampilkan info karier berdasarkan ID
    public function show($id)
    {
        $infoKarier = CareerInfo::find($id); // Gunakan model CareerInfo

        if (!$infoKarier) {
            return response()->json(['message' => 'Info karier tidak ditemukan.'], 404);
        }

        return response()->json($infoKarier, 200);
    }

    // 4. Menghapus info karier berdasarkan ID
    public function destroy($id)
    {
        $infoKarier = CareerInfo::find($id); // Gunakan model CareerInfo

        if (!$infoKarier) {
            return response()->json(['message' => 'Info karier tidak ditemukan.'], 404);
        }

        $infoKarier->delete();

        return response()->json(['message' => 'Info karier berhasil dihapus.'], 200);
    }
}
