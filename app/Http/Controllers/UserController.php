<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function articles()
    {
        return view('user.articles');
    }
    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
}

