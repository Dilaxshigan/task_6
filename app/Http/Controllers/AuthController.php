<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

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
        $package = Package::paginate(6);
        return view('booking', compact('package'));
    }

    public function contact()
    {
        return view('contact');
    }
}
