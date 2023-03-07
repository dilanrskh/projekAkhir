<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use App\Http\Controllers\Controller;

class KategoriProdukController extends Controller
{
    public function ktproduk()
    {
        $kategori_produk = KategoriProduk::all();
        return view('Admin.KategoriProduk.kategoriproduk', [
            'kategori_produk' => $kategori_produk,
        ]);
    }

    public function tambahkt(Request $request)
    {
        //  dd($request->all());
        KategoriProduk::create([
            'kategori_produk' => $request->kategori_produk,
            'slug'          => Str::slug($request->kategori_produk),
        ]);

        return redirect()->back();
    }

    public function updatekt(Request $request)
    {
        //  dd($request->all());

        $kategori_produk                 = KategoriProduk::findOrFail($request->id);

        $kategori_produk->kategori_produk    = $request->kategori_produk;
        $kategori_produk->slug             = Str::slug($request->kategori_produk);

        $kategori_produk->update();

        return redirect()->back()->with('Ok', 'Berhasil Update Data !');
    }

    public function hapuskt(Request $request)
    {
        //  dd($request->all());

        $kategori_produk = KategoriProduk::findOrFail($request->id);

        $kategori_produk->delete();

        return redirect()->back()->with('Oke', 'Berhasil Hapus Data !');
    }
}
