<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventPackage;

class EventController extends Controller
{
    // Mendapatkan semua event
    public function index()
    {
        $events = EventPackage::all();
        return response()->json($events, 200);
    }

    // Membuat event baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        $event = EventPackage::create($request->all());
        return response()->json(['success' => true, 'data' => $event], 201);
    }

    // Memperbarui event berdasarkan ID
    public function update(Request $request, $id)
    {
        $event = EventPackage::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        $event->update($request->all());
        return response()->json(['success' => true, 'data' => $event], 200);
    }

    // Menghapus event berdasarkan ID
    public function destroy($id)
    {
        EventPackage::destroy($id);
        return response()->json(['success' => true, 'message' => 'Event deleted successfully'], 200);
    }
}
