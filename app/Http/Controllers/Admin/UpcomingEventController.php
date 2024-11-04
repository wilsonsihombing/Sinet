<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpcomingEventRequest;
use App\Models\UpcomingEvent;


class UpcomingEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = UpcomingEvent::all();
        return view('pages.admin.upcoming-event.index',[
            'items' => $item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        return view('pages.admin.upcoming-event.create');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpcomingEventRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/upcoming-event', 'public');

        UpcomingEvent::create($data);
        return redirect()->route('upcoming-event.index');
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
        $item = UpcomingEvent::findOrFail($id);

        return view('pages.admin.upcoming-event.edit', [
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/upcoming-event', 'public');

        $item = UpcomingEvent::findOrFail($id);
        $item->update($data);

        return redirect()->route('upcoming-event.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = UpcomingEvent::findOrFail($id);
        $item->delete();

        return redirect()->route('upcoming-event.index');
    }
}
