<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function homepage()
    {
        return view('home');
    }
}
