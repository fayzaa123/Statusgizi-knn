<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController
{
    
    public function profile()
    {
        return view('profile');
    }

    public function edit()
    {
        return view('edit-profile');
    }
}
