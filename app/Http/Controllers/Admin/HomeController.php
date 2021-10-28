<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $menu = 'dashboard';
        return view('admin.dashboard.index', compact('menu'));
    }
}
