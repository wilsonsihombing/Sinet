<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UpcomingEvent;
use Illuminate\Http\Request;

class UpComingEventController extends Controller
{
    // Get all upcoming events
    public function index()
    {
        $events = UpcomingEvent::all();
        return response()->json($events, 200);
    }

    // Get a single upcoming event by ID
    public function show($id)
    {
        $event = UpcomingEvent::find($id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }
        return response()->json($event, 200);
    }

    // Create a new upcoming event
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|string', // Jika image adalah path atau URL
        ]);

        // Menyimpan event baru
        $event = UpcomingEvent::create($validatedData);

        return response()->json($event, 201);
    }

    // Update an upcoming event
    public function update(Request $request, $id)
    {
        $event = UpcomingEvent::find($id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        // Validasi input
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|string',
        ]);

        // Update event
        $event->update($validatedData);

        return response()->json($event, 200);
    }

    // Delete an upcoming event
    public function destroy($id)
    {
        $event = UpcomingEvent::find($id);
        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->delete();
        return response()->json(['message' => 'Event deleted successfully'], 200);
    }
}
