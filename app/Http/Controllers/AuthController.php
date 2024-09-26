<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('home');
    }

    public function package()
    {
        return view('package');
    }

    public function about()
    {
        return view('about');
    }

    public function booking()
    {
        return view('booking');
    }

    public function contact()
    {
        return view('contact');
    }
}
