<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    // Get all news
    public function index()
    {
        return response()->json(News::all(), 200);
    }

    // Get a single news by ID
    public function show($id)
    {
        $news = News::find($id);
        if (!$news) {
            return response()->json(['message' => 'News not found'], 404);
        }
        return response()->json($news, 200);
    }

    // Create a new news
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:news',
        'body' => 'required|string',
        'image' => 'nullable|string', // jika Anda menggunakan URL atau path
        'published_at' => 'nullable|date',
    ]);

    // Buat berita baru dengan data yang telah divalidasi
    $news = News::create($validatedData);

    return response()->json($news, 201);
}


    // Update a news
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        if (!$news) {
            return response()->json(['message' => 'News not found'], 404);
        }

        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'body' => 'nullable|string',
            'image' => 'nullable|string',
            'published_at' => 'nullable|date',
        ]);

        $news->update([
            'title' => $validated['title'] ?? $news->title,
            'slug' => isset($validated['title']) ? Str::slug($validated['title'], '-') : $news->slug,
            'body' => $validated['body'] ?? $news->body,
            'image' => $validated['image'] ?? $news->image,
            'published_at' => $validated['published_at'] ?? $news->published_at,
        ]);

        return response()->json($news, 200);
    }

    // Delete a news
    public function destroy($id)
    {
        $news = News::find($id);
        if (!$news) {
            return response()->json(['message' => 'News not found'], 404);
        }

        $news->delete();
        return response()->json(['message' => 'News deleted successfully'], 200);
    }
}
