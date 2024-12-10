<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function produit()
    {
        return view('produits');
    }
}
    /**
     * Update the user's profile information.
     */