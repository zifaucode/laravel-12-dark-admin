<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.auth.login");
    }

    public function register()
    {
        return view("admin.auth.register");
    }

    public function auth(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('error', 'Username atau password salah!');
    }

    public function registerPost(Request $request)
    {
        if (User::where('username', $request->username)->first()) {
            return redirect()->route('register')->with('error', 'Username sudah terdaftar!');
        }
        if ($request->password != $request->password_confirmation) {
            return redirect()->route('register')->with('error', 'Password tidak cocok!');
        }

        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        try {
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 'user';
            $user->save();

            Auth::login($user);

            return redirect()->route('dashboard')->with('success', 'Berhasil mendaftar!');
        } catch (\Exception $e) {
            return redirect()->route('register')->with('error', 'Gagal mendaftar!');
        }
    }
}
