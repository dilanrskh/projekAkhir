<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class CobaApiController extends Controller
{
    public function produk()
    {
        $produk = Produk::all();
        return response()->json([
            'status' => true,
            'data'   => $produk,
        ], 200);
    }
}
