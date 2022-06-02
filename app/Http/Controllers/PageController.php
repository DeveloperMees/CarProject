<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    // displaying the homepage view

    public function homepage()
    {
        return view('pages.homepage');
    }

}
