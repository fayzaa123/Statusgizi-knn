<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:orangtua,email',
            'password' => 'required|min:8',
        ]);

        // Jika validasi gagal, kembalikan kembali ke halaman registrasi dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect('/register')->withErrors($validator)->withInput();
        }

        // Simpan pengguna ke database
        Orangtua::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login
        return redirect('/login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $user = Auth::guard('web')->user();

            // Redirect berdasarkan email
            if ($user->is_admin) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('ortu.dashboard');
            }
        }

        // Jika autentikasi gagal, kembalikan kembali ke halaman login dengan pesan kesalahan
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
