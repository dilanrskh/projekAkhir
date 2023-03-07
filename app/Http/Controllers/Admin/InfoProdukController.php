<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Produk\InfoProdukRequest;
use App\Models\InfoProduk;

class InfoProdukController extends Controller
{
    public function infoproduk()
    {
        $info_produk = InfoProduk::all();
        return view('Admin.InfoProduk.infoproduk', [
            'info_produk'  => $info_produk,
        ]);
    }

    public function baruinfoproduk()
    {
        $produk = Produk::all();
        return view('Admin.InfoProduk.infopr-create', [
            'produk' => $produk,
        ]);
    }

    public function addinfoproduk(InfoProdukRequest $request)
    {
        // dd($request->all());

        InfoProduk::create([
            'nama_produk'                  => $request->nama_produk,
            'information'                  => $request->information,
        ]);

        return redirect()->route('infopr.index')->with('Ok', "Informasi  berhasil disimpan");
    }

    public function hapusinfoproduk(Request $request)
    {
        // dd($request->all());
        $info_produk = InfoProduk::findOrFail($request->id);  // Cari data
        $info_produk->delete(); // Hapus data di database
        return redirect()->back();
    }

    public function editinfoproduk($id)
    {
        $produk = Produk::all();

        $info_produk = InfoProduk::findOrFail($id);
        return view('Admin.InfoProduk.infopr-update', compact('produk', 'info_produk'));
    }

    public function updateinfoproduk(Request $request, $id)
    {
        // dd($request->all());

         // Cari data yang mau diedit
         $info_produk = InfoProduk::findOrFail($id);

         //Proses Ubah datanya
         $info_produk->nama_produk          = $request->nama_produk;
         $info_produk->information          = $request->information;
 
         // Menyimpan data perubahan
         $info_produk->update();
 
         // Setelah proses perubahan selesai diantar ke halaman index
         return redirect()->route('infopr.index');
    }
}
