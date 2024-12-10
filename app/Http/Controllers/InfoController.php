<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function info()
    {
        return view('infos');
    }
}
    /**
     * Update the user's profile information.
     */