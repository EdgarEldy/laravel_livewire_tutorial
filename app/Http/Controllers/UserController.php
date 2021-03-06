<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Constructor
    public function __construct()
    {
    }

    // GET users/index view
    public function index()
    {
        return view('users.index');
    }

    // Get users/create view
    public function create()
    {
        return view('auth.register');
    }
}
