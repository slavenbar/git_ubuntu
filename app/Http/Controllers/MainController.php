<?php

namespace App\Http\Controllers;

use App\Contact;
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
        //return view('review');
        $reviews = new Contact();
        return view('review', ['reviews' => $reviews->all()]);
    }

    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:6|max:100',
            'subject' => 'required|min:6|max:100',
            'message' => 'required|min:15|max:250'
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');
        $review->save();

        return redirect()->route('review');
    }
}
