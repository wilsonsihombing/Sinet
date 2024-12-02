<?php
namespace App\Http\Controllers;

use App\Models\CareerInfo;
use Illuminate\Http\Request;
use App\Http\Requests\CareerRequest;
use Illuminate\Support\Facades\Auth;


class CareerInfoController extends Controller
{
    public function index()
    {
        // Ambil semua data karier dengan relasi poster
        $careers = CareerInfo::with('poster')->get();

        // Tampilkan view dengan data
        return view('pages.infokarier', compact('careers'));
    }

    public function create()
    {
        // Tampilkan halaman untuk menambahkan data baru
        return view('pages.addkarier');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'posted_date' => 'required|date',
            'expired_date' => 'nullable|date|after_or_equal:posted_date',
        ]);

        // Menambahkan data ke database
        CareerInfo::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'posted_date' => $validated['posted_date'],
            'expired_date' => $validated['expired_date'] ?? null,
            'posted_by' => Auth::user()->id, // Atur sesuai kebutuhan, misalnya dari session user
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('career.index')->with('success', 'Info Karier berhasil ditambahkan!');
    }

    public function show($id)
    {
        $career = CareerInfo::with('poster')->findOrFail($id);

        // Format tanggal sebelum mengirim ke view
        $formattedExpiredDate = $career->expired_date ? $career->expired_date->format('d F Y') : 'Tidak ada';

        return response()->json([
            'title' => $career->title,
            'description' => $career->description,
            'poster' => [
                'name' => $career->poster->name ?? 'Tidak diketahui',
            ],
            'posted_date' => $career->posted_date->diffForHumans(),
            'expired_date' => $formattedExpiredDate,
        ]);
    }

    public function search(Request $request)
    {
        // Ambil nilai pencarian dari input
        $search = $request->input('search');

        // Cari lowongan berdasarkan judul atau deskripsi yang mengandung kata kunci pencarian
        $careers = CareerInfo::where('title', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->get();

        // Kembalikan hasil pencarian ke view yang benar
        return view('pages.infokarier', compact('careers'));
    }


}
