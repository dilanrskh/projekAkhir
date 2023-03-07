<?php

namespace App\Http\Controllers\Admin;

use App\Models\MerkProduk;
use Illuminate\Http\Request;
use App\Models\Admin\ImageBrand;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\ImageBrandRequest;
use App\Models\ImageBrand as ModelsImageBrand;

class ImageBrandControlller extends Controller
{
    public function imageBrand()
    {
        $image_brand = ModelsImageBrand::all();
        $merk_produk = MerkProduk::all();

        return view('Admin.ImageBrand.imagebrand', [
            'image_brand'     => $image_brand,
            'merk_produk'     => $merk_produk,
        ]);
    }

    public function baruimageBrand()
    {
        $merk_produk = MerkProduk::all();

        return view('Admin.ImageBrand.imagebrand-create', [
            'merk_produk'     => $merk_produk,
        ]);
    }

    public function addimageBrand(ImageBrandRequest $request)
    {
        // dd($request->all());

        ModelsImageBrand::create([
            'merk_produk'                  => $request->merk_produk,
            'image_brand'                 => $request->file('image_brand')->store('img-imagebrand'),
        ]);

        return redirect()->route('imagebrand.index')->with('Ok', "Image $request->merk_produk  berhasil disimpan");
    }

    public function hapusimagebrand(Request $request)
    {
        // dd($request->all());

        $image_brand = ModelsImageBrand::findOrFail($request->id);  // Cari data
        Storage::delete($image_brand->image_brand); // Hapus file directory system
        $image_brand->delete(); // Hapus data di database
        return redirect()->back();
    }
}
