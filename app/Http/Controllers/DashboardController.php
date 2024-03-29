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
        $brands = Brand::latest();

        if (\request('search')) {
            $brands->where('name', 'like', '%'. \request('search') . '%');
        }

        return view('dashboard.brands.index', [
            'brands' => $brands->get()
        ]);
    }
}
