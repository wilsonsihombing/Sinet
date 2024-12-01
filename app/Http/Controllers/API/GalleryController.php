<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\GalleryEvent;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Get all galleries
    public function index()
    {
        $galleries = GalleryEvent::all();
        return response()->json($galleries, 200);
    }

    // Get a single gallery by ID
    public function show($id)
    {
        $gallery = GalleryEvent::find($id);
        if (!$gallery) {
            return response()->json(['message' => 'Gallery not found'], 404);
        }
        return response()->json($gallery, 200);
    }

    // Create a new gallery
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'event_package_id' => 'required|integer|exists:event_packages,id',
            'image' => 'required|string', // Jika image adalah path atau URL
        ]);

        // Menyimpan gallery baru
        $gallery = GalleryEvent::create($validatedData);

        return response()->json($gallery, 201);
    }

    // Update a gallery
    public function update(Request $request, $id)
    {
        $gallery = GalleryEvent::find($id);
        if (!$gallery) {
            return response()->json(['message' => 'Gallery not found'], 404);
        }

        // Validasi input
        $validatedData = $request->validate([
            'event_package_id' => 'nullable|integer|exists:event_packages,id',
            'image' => 'nullable|string',
        ]);

        // Update gallery
        $gallery->update($validatedData);

        return response()->json($gallery, 200);
    }

    // Delete a gallery
    public function destroy($id)
    {
        $gallery = GalleryEvent::find($id);
        if (!$gallery) {
            return response()->json(['message' => 'Gallery not found'], 404);
        }

        $gallery->delete();
        return response()->json(['message' => 'Gallery deleted successfully'], 200);
    }
}
