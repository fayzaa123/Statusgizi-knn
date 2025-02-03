<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HitungController
{
    public function ukur_balita()
    {
        return view('user.formhitung');
    }
}
