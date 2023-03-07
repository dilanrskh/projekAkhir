<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ChartController extends Controller
{
    public function chartproduk()
    {

        $produk = Produk::select('kategori_produk', DB::raw("COUNT(id) as count"))
            ->groupBy('kategori_produk')
            ->get();

        return view('chart', [
            'produk' => $produk,
        ]);
    }
}
