<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_admin()
    {
        return view('admin.dashboard-admin');
    }

    public function dashboard_user()
    {
        return view('user.dashboard-user');
    }
}


