<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Showing the index

    public function index()
    {
        return view('dashboard.index');
    }

    // Showing the brands

    public function brands()
    {
        $brand = Brand::find(1);

        foreach ($brand->images as $image) {
            dd($image);
        }
        $user = User::first(1);

        foreach ($user->images as $image) {
            dd($image);
        }
        return view('dashboard.brands.index');
    }
}
