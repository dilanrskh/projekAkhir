<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use App\Models\MerkProduk;
use App\Models\JenisProduk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\KategoriProduk;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Produk\ProdukRequest;
use App\Models\ImageProduk;
use App\Models\InfoProduk;
use App\Models\Review;

class ProdukController extends Controller
{
    public function produk()
    {
        // $produk = Produk::with('merkproduk', 'jenisproduk', 'kategoriproduk')->get();
        $produk = Produk::all();
        return view('Admin.Produk.produkdash', [
            'produk'  => $produk,
        ]);

        // return $produk;
    }

    public function baruproduk()
    {
        $merk_produk = MerkProduk::all();
        $jenis_produk = JenisProduk::all();
        $kategori_produk = KategoriProduk::all();
        return view('Admin.Produk.pd-create', [
            'merk_produk'  => $merk_produk,
            'jenis_produk'    => $jenis_produk,
            'kategori_produk'    => $kategori_produk,
        ]);
    }

    public function addproduk(ProdukRequest $request)
    {
        // dd($request->all());

        Produk::create([
            'merk_produk'            => $request->merk_produk,
            'jenis_produk'           => $request->jenis_produk,
            'kategori_produk'        => $request->kategori_produk,
            'nama_produk'            => $request->nama_produk,
            'kandungan_produk'       => $request->kandungan_produk,
            'slug'                   => Str::slug($request->nama_produk),
            'harga'                  => $request->harga,
            'deskripsi'              => $request->deskripsi,
            'foto_produk'            => $request->file('foto_produk')->store('img-fotoproduk'),
            'stok'                   => $request->stok,
        ]);

        return redirect()->route('produk.index')->with('Ok', "Data Produk $request->nama_produk  berhasil disimpan");
    }

    public function hapusproduk(Request $request)
    {
        // dd($request->all());
        $produk = Produk::findOrFail($request->id);  // Cari data
        Storage::delete($produk->foto_produk); // Hapus file directory system
        $produk->delete(); // Hapus data di database
        return redirect()->back();
    }

    public function updateproduk(Request $request, $id)
    {
        // dd($request->all());


        $produk = Produk::findOrFail($id);
        //Proses Ubah datanya


        if ($request->hasFile('image')) {

            //upload new image
            $foto_produk = $request->file('foto_produk');
            $foto_produk->storeAs('public/images', $foto_produk->hashName());

            //delete old image
            Storage::delete('public/images/' . $produk->foto_produk);

            //update post with new image
            $produk->update([
                'foto_produk'     => $foto_produk->hashName(),
            ]);
        } else {

            $produk->merk_produk             = $request->merk_produk;
            $produk->jenis_produk            = $request->jenis_produk;
            $produk->kategori_produk         = $request->kategori_produk;
            $produk->nama_produk             = $request->nama_produk;
            $produk->kandungan_produk        = $request->kandungan_produk;
            $produk->slug                    = Str::slug($request->nama_produk);
            $produk->harga                   = $request->harga;
            $produk->deskripsi               = $request->deskripsi;
            $produk->foto_produk             = $request->file('foto_produk')->store('img-fotoproduk');
            $produk->stok                    = $request->stok;
        }

        // Menyimpan data perubahan
        $produk->update();

        // Setelah proses perubahan selesai diantar ke halaman index
        return redirect()->route('produk.index');
    }

    public function edit($id)
    {
        $merk_produk = MerkProduk::all();
        $jenis_produk = JenisProduk::all();
        $kategori_produk = KategoriProduk::all();

        $produk = Produk::findOrFail($id);
        return view('Admin.Produk.pd-update', compact('produk', 'merk_produk', 'jenis_produk', 'kategori_produk'));
    }

    public function detailproduk($id)
    {
        $merk_produk = MerkProduk::all();
        $jenis_produk = JenisProduk::all();
        $kategori_produk = KategoriProduk::all();
        $image_produk = ImageProduk::where('nama_produk', $id)->get();
        $info_produk = InfoProduk::where('nama_produk', $id)->get();
        $review = Review::where('nama_produk', $id)->get();

        $produk = Produk::findOrFail($id);
        return view('Admin.Produk.pd-detail', compact('produk', 'merk_produk', 'jenis_produk', 'kategori_produk', 'image_produk', 'info_produk', 'review'));
    }
}
