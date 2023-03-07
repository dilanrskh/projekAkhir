<?php

namespace App\Http\Controllers\Admin;

use App\Models\MerkProduk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MerkProdukController extends Controller
{
    public function merkproduk()
    {
        $merk_produk = MerkProduk::all();
        return view('Admin.MerkProduk.merkproduk', [
            'merk_produk' => $merk_produk,
        ]);

    }

    public function tambahmp(Request $request)
    {
        MerkProduk::create([
            'merk_produk' => $request->merk_produk,
            'slug'          => Str::slug($request->merk_produk),
        ]);

        return redirect()->back();
    }

    public function updatemp(Request $request)
    {
        $merk_produk                 = MerkProduk::findOrFail($request->id);

        $merk_produk->merk_produk    = $request->merk_produk;
        $merk_produk->slug             = Str::slug($request->merk_produk);

        $merk_produk->update();

        return redirect()->back()->with('Ok', 'Berhasil Update Data !');
    }

    public function hapusmp(Request $request)
    {
        $merk_produk = MerkProduk::findOrFail($request->id);

        $merk_produk->delete();

        return redirect()->back()->with('Oke', 'Berhasil Hapus Data !');
    }
}
