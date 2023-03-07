<?php

namespace App\Http\Controllers\Chart;

use App\Models\User;
use App\Charts\ProdukChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Support\Facades\Http;

class CobaController extends Controller
{
    public function chart()
    {
        $users = Produk::select(DB::raw("COUNT(*) as count"))
                    ->groupBy(DB::raw("kategori_produk"))
                    ->pluck('count');
          
        return view('cobachart', compact('users'));
    }
}
