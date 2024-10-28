<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventPackage;
use App\Models\GalleryEvent;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard',[
            'event_package' => EventPackage::count(),
            'gallery' => GalleryEvent::count(),
        ]);
    } 
}
