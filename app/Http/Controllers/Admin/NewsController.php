<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = News::all();
        return view('pages.admin.news.index', [
            'items' => $item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['image'] = $request->file('image')->store('assets/news', 'public');

        News::create($data);
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = News::findOrFail($id);

        return view('pages.admin.news.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = News::findOrFail($id);

        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('assets/news', 'public');
        } else {
            $data['image'] = $item->image;
        }

        $item->update($data);

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = News::findOrFail($id);
        $item->delete();

        return redirect()->route('news.index');
    }
}
