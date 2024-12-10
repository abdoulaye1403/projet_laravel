<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function contact()
    {
        return view('contact');
    }
}
    /**
     * Update the user's profile information.
     */