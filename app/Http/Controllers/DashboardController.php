<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use App\Models\Orangtua;
use Illuminate\Http\Request;

class DashboardController
{
    public function dashboard_admin()
    {
        $orangtua = Orangtua::count();
        $dataset = Balita::count();
        return view('admin.dashboard-admin',compact('orangtua', 'dataset'));
    }

    public function dashboard_user()
    {
        return view('user.dashboard-user');
    }
}


