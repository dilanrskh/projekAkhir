<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use App\Models\ImageProduk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Produk\ImageProdukRequest;

class ImageProdukController extends Controller
{
    public function imgproduk()
    {
        $image_produk = ImageProduk::all();
        return view('Admin.ImageProduk.imageproduk', [
            'image_produk'  => $image_produk,
        ]);

    }

    public function baruimgproduk()
    {
        $produk = Produk::all();
        return view('Admin.ImageProduk.imgpr-create', [
            'produk' => $produk,
        ]);
    }

    public function addimgproduk(ImageProdukRequest $request)
    {
        // dd($request->all());

        ImageProduk::create([
            'nama_produk'                  => $request->nama_produk,
            'image_produk'                 => $request->file('image_produk')->store('img-imageproduk'),
        ]);

        return redirect()->route('imgpr.index')->with('Ok', "Image $request->nama_produk  berhasil disimpan");
    }

    public function hapusimgproduk(Request $request)
    {
        // dd($request->all());
        $image_produk = ImageProduk::findOrFail($request->id);  // Cari data
        Storage::delete($image_produk->image_produk); // Hapus file directory system
        $image_produk->delete(); // Hapus data di database
        return redirect()->back();
    }
}
