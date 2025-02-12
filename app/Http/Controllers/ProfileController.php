<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController
{

    public function profile()
    {
        return view('profile');
    }

    public function edit( Request $request)
    {
        $request->validate([
            'new_email' => 'required|email',
            'new_password' => 'required|min:8',
        ]);

        DB::table('orangtua')
            ->where('id', Auth::id())
            ->update([
                'email' => $request->new_email,
                'password' => Hash::make($request->new_password)
            ]);

        return back()->with('success', 'Password berhasil diubah');
    }
}
