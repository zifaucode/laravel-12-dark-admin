<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.profile.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $profile = User::find(Auth::user()->id);
        return view(
            "admin.profile.edit",
            [
                'profile' => $profile,
            ]
        );
    }

    /**
     * Store a newly created resource in storage (Used for Update here).
     */
    public function store(Request $request)
    {
        $profile = User::find(Auth::user()->id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $profile->id,
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->address = $request->address;

        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($profile->photo && file_exists(public_path('photo-user/' . $profile->photo))) {
                unlink(public_path('photo-user/' . $profile->photo));
            }

            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('photo-user'), $filename);
            $profile->photo = $filename;
        }

        $profile->save();

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Not used, using store instead
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
