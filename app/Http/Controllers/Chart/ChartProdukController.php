<?php

namespace App\Http\Controllers\Chart;

use App\Models\User;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Komentar;
use App\Models\Review;

class ChartProdukController extends Controller
{
    public function chartProduk()
    {
        $produk = Produk::select(DB::raw("COUNT(*) as count"))
            ->groupBy(DB::raw("kategori_produk"))
            ->pluck('count');

        return view('Chart.chart-produk', compact('produk'));
    }

    public function chartUser()
    {
        $users = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("created_at"))
            ->pluck('count');

        return view('Chart.chart-user', compact('users'));
    }

    public function chartRC()
    {

        $rc = Review::select(DB::raw("COUNT(*) as count"))
            ->groupBy(DB::raw("review"))
            ->pluck('count');

        return view('Chart.chart-rc', compact('rc'));
    }
}
