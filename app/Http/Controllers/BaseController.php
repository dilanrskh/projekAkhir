<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Models\MerkProduk;
use App\Models\User;
use App\Models\Produk;
use App\Models\Review;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $produk       = Produk::count();
        $user         = User::count();
        $review       = Review::count();
        $komentar     = Komentar::count();
        $merk_produk  = MerkProduk::count();
        
        return view('template.index',[
            'produk'          => $produk,
            'user'            => $user,
            'review'          => $review,
            'komentar'        => $komentar,
            'merk_produk'     => $merk_produk,
        ]);

    }
   
}
