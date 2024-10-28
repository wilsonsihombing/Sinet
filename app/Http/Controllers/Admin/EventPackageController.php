<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventPackage;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\EventPackageRequest;
use Illuminate\Support\Str;

class EventPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = EventPackage::all(); 

        return view('pages.admin.event-package.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.event-package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);


        EventPackage::create($data);
        return redirect()->route('event-package.index');
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
        $item = EventPackage::findOrFail($id);

        return view('pages.admin.event-package.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventPackageRequest $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = EventPackage::findOrFail($id);
        $item->update($data);

        return redirect()->route('event-package.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = EventPackage::findOrFail($id);
        $item->delete();

        return redirect()->route('event-package.index');
    }
}
