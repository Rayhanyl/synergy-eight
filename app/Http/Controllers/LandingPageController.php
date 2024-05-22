<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landingpage.index');
    }

    public function aboutus()
    {
        return view('aboutus.index');
    }
    public function services()
    {
        return view('services.index');
    }
    public function contactus()
    {
        return view('contactus.index');
    }
}
