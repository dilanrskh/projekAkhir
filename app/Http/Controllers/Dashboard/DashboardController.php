<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Produk;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Komentar;

class DashboardController extends Controller
{
    public function dashproduk()
    {

        $produk = Produk::count();

        $makeup = Produk::where('kategori_produk', 1)->count();
        $skincare = Produk::where('kategori_produk', 2)->count();
        $haircare = Produk::where('kategori_produk', 3)->count();
        $bodycare = Produk::where('kategori_produk', 4)->count();
        $nailcare = Produk::where('kategori_produk', 5)->count();
        return view('Dashboard.Dashproduk', [
            'makeup' => $makeup,
            'skincare' => $skincare,
            'haircare' => $haircare,
            'bodycare' => $bodycare,
            'nailcare' => $nailcare,
            'produk'  => $produk,
        ]);
    }

    public function dashtransaksi()
    {
        return view('Dashboard.DashTransaksi');
    }

    public function dashuser()
    {
        $user = User::count();

        $admin = User::where('role', 1)->count();
        $member = User::where('role', 2)->count();
        $pengunjung = User::where('role', 3)->count();

        return view('Dashboard.DashUser', [
            'user' => $user,
            'admin' => $admin,
            'member' => $member,
            'pengunjung' => $pengunjung,
        ]);
    }

    public function dashkegiatan()
    {
        $review = Review::count();
        $komentar = Komentar::count();

        // $review = Produk::where('kategori_produk',1)->count();
        return view('Dashboard.DashRC', [
            'review'    => $review,
            'komentar'  => $komentar,
        ]);
    }

    // Chart

    public function chartuser()
    {
        $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count', 'month_name');

        $labels = $users->keys();
        $data = $users->values();

        return view('Dashboard.DashUser', compact('labels', 'data'));
    }
}
