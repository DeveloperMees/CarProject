<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandsRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Media;

class BrandController extends Controller
{

    // Go to the creating section

    public function create()
    {
        return view('dashboard.brands.create');
    }

    // Create an object

    public function store(BrandsRequest $request, Brand $brand, Media $media)
    {

        $file = $request->file;
        $brand->fill($request->all());
        $brand->save();

        if ($request->hasFile('file')){
            $media->fill([
                'mediable_type' => 'App\Models\Brand',
                'mediable_id' => $brand->id,
                'title' => date('YmdHi').$file->getClientOriginalName(),
                'url' => '/media/'.date('YmdHi').$file->getClientOriginalName()
            ]);

            $file->move(public_path('media'), $media['title']);
            $media->save();
        }else {
            dd('fails');
        }


        return redirect()->back()->with('message', 'Merk is toegevoegd!');
    }

    // Go to the edit section

    public function edit($id)
    {
        $brand = Brand::findorfail($id);

        return view('dashboard.brands.edit', [
            'brand' => $brand
        ]);
    }


//     Update an object

    public function update(BrandsRequest $request, Brand $brand, Media $media, $id)
    {
        $deletedImages = $request->input('delete-image');
        $brand = Brand::findorfail($id);
        $file = $request->file;
        $brand->fill($request->all());
        $brand->save();

        if ($request->hasFile('file')){
            $media->fill([
                'mediable_type' => 'App\Models\Brand',
                'mediable_id' => $brand->id,
                'title' => date('YmdHi').$file->getClientOriginalName(),
                'url' => '/media/'.date('YmdHi').$file->getClientOriginalName()
            ]);

            $file->move(public_path('media'), $media['title']);
            $media->save();
        }

        // Delete object

        if (isset($deletedImages) ) {
            Media::destroy($deletedImages);

            return redirect()->back()->with('message', 'Merk is aangepast of verwijderd!');

        }

        return redirect()->back()->with('message', 'Merk is aangepast!');
    }


//    Deleting an object

    public function delete($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->to('/brands')->with('message', 'Merk is verwijderd!');
    }
}

