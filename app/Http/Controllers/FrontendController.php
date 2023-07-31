<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('pages.frontend.index');
    }

    public function details()
    {
        return view('pages.frontend.details');
    }

    public function cart()
    {
        return view('pages.frontend.cart');
    }
}
