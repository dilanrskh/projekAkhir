<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ImageBrand;
use App\Models\ImageProduk;
use App\Models\KategoriProduk;
use App\Models\MerkProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function index()
    {

        $produk = ImageProduk::all();
        // dd($produ);
        $coba = "bisa data";
        return Inertia('landing', [
            'produk' => $produk,
            'coba' => $coba,
        ]);
    }

    public function brand()
    {
        $produk = MerkProduk::all();
        return Inertia('brand', [
            'produk'  => $produk,
        ]);
    }

    public function MakeUp()
    {
        // $kategori_produk = KategoriProduk::where('slug')->first();

        // $produk = Produk::all();
        $merk_produk = MerkProduk::all();

        $produk = Produk::where('kategori_produk', 1)->get();
        return Inertia('makeup',[
            'produk'          => $produk,
            'merk_produk'     => $merk_produk,
        ]);

    }

    public function SkinCare()
    {
        $skincare = Produk::where('kategori_produk', 2)->get();

        return Inertia('skincare', [
            'skincare' => $skincare,
        ]);
    }

    public function HairCare()
    {
        $haircare = Produk::where('kategori_produk', 3)->get();

        return Inertia('haircare', [
            'haircare' => $haircare,
        ]);
    }

    public function NailCare()
    {
        $nailcare = Produk::where('kategori_produk', 5)->get();

        return Inertia('nailcare', [
            'nailcare'  => $nailcare,
        ]);
    }

    public function BodyCare()
    {
        $bodycare = Produk::where('kategori_produk', 4)->get();

        return Inertia('bodycare', [
            'bodycare'  => $bodycare,
        ]);
    }

    public function Fragrance()
    {
        $fragrance = Produk::where('kategori_produk', 6)->get();

        return Inertia('fragrance', [
            'fragrance'  => $fragrance,
        ]);
    }
}
