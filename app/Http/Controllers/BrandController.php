<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandsRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Media;

class BrandController extends Controller
{

    // Create a brand

    public function create()
    {
        return view('dashboard.brands.create');
    }

    public function store(BrandsRequest $request, Brand $brand)
    {
        $brand->fill($request->all());
        $brand->save();


        return redirect()->back()->with('message', 'Merk is toegevoegd!');
    }


}
