<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;
use App\Models\GalleryEvent;
use Illuminate\Http\Request;
use App\Models\EventPackage;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = GalleryEvent::with(['eventPackage'])->get();

        return view('pages.admin.gallery.index', [
            'items' => $items
        ]);
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event_packages = EventPackage::all();
        return view('pages.admin.gallery.create',[
            'event_packages' => $event_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        // dd($data); // Debugging untuk memastikan bahwa `event_package_id` ada

        $data['image'] = $request->file('image')->store('assets/gallery', 'public');

        GalleryEvent::create($data);
        return redirect()->route('gallery.index');
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
        $item = GalleryEvent::findOrFail($id);
        $event_packages = EventPackage::all();

        return view('pages.admin.gallery.edit', [
            'item' => $item,
            'event_packages' => $event_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/gallery', 'public');

        $item = GalleryEvent::findOrFail($id);
        $item->update($data);

        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = GalleryEvent::findOrFail($id);
        $item->delete();

        return redirect()->route('gallery.index');
    }
}
