<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function produit()
    {
        return view('page/produits');
    }

    public function info()
    {
        return view('page/infos');
    }

    public function contact()
    {
        return view('page/contact');
    }
}
