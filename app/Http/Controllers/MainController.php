<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function aboutPage()
    {
        return view('about');
    }

    public function galeryPage()
    {
        return view('galery');
    }

    public function contactPage()
    {
        return view('contact');
    }

    public function reviewPage()
    {
        return view('review');
    }

    public function review_check(Request $request)
    {
        dd($request);
    }
}
