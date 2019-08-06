<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function aboutUs()
    {
        return view('pages.about_us');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
