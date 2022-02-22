<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Dashboard view
    public function index()
    {
        return view('dashboard.index');
    }
}
