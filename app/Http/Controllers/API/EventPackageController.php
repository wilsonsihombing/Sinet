<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\EventPackage;
use Illuminate\Http\Request;

class EventPackageController extends Controller
{
    // Get all event packages
    public function index()
    {
        $eventPackages = EventPackage::all();
        return response()->json($eventPackages, 200);
    }

    // Get a single event package by ID
    public function show($id)
    {
        $eventPackage = EventPackage::find($id);
        if (!$eventPackage) {
            return response()->json(['message' => 'Event Package not found'], 404);
        }
        return response()->json($eventPackage, 200);
    }

    // Create a new event package
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:event_packages',
            'location' => 'required|string',
            'about' => 'required|string',
        ]);

        // Menyimpan event package baru
        $eventPackage = EventPackage::create($validatedData);

        return response()->json($eventPackage, 201);
    }

    // Update an event package
    public function update(Request $request, $id)
    {
        $eventPackage = EventPackage::find($id);
        if (!$eventPackage) {
            return response()->json(['message' => 'Event Package not found'], 404);
        }

        // Validasi input
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255',
            'location' => 'nullable|string',
            'about' => 'nullable|string',
        ]);

        // Update event package
        $eventPackage->update($validatedData);

        return response()->json($eventPackage, 200);
    }

    // Delete an event package
    public function destroy($id)
    {
        $eventPackage = EventPackage::find($id);
        if (!$eventPackage) {
            return response()->json(['message' => 'Event Package not found'], 404);
        }

        $eventPackage->delete();
        return response()->json(['message' => 'Event Package deleted successfully'], 200);
    }
}
