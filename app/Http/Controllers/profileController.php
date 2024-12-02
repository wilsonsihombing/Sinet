<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        return view('pages.profile', compact('user'));
    }

    public function edit()
    {
        $user = User::findOrFail(Auth::user()->id);

        return view('pages.editprofile', compact('user'));
    }

    public function update(UpdateProfileRequest $request)
    {
        /** @var User $user */
        $user = Auth::user();

        // Mengambil dan mengonversi tanggal
        $dob = $request->input('dob');
        $user->date_of_birth = Carbon::parse($dob); // Mengonversi ke objek Carbon


        $user->name = $request->input('name');
        // $dob = $request->input('dob');
        // $user->date_of_birth = Carbon::parse($dob);
        $user->force = $request->input('angkatan');
        $user->email = $request->input('email');
        $user->address = $request->input('alamat');
        $user->phone_number = $request->input('phone');

        if ($request->hasFile('avatar')) {
            if ($user->photo) {
                Storage::delete($user->photo);
            }
            //simpan avatar baru
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->photo = $path;
        }

        $user->save();
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully');
    }
}
