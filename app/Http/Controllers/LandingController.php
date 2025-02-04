<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController
{
    public function landing()
    {
        return view('landing.page');
    }
}
