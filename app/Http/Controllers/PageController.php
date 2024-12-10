<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function produit()
    {
        return view('produits');
    }

    public function info()
    {
        return view('infos');
    }

    public function contact()
    {
        return view('contact');
    }
}
