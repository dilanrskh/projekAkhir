<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Register
    public function store(Request $request)
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:100'],
            'email'    => ['required', 'string', 'email', 'max:60', 'unique:users'],
            'password' => ['required', 'min:6']
        ]);

        // Insert data
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user = User::where('email', $request->email)->first();
        $tokenResult = $user->createToken('authToken')->plainTextToken;

        $data = [
            'access_token'  => $tokenResult,
            'token_type'    => 'Bearer',
            'user'          => $user
        ];

        return $this->sendResponse($data, 'Selamat, Anda Berhasil Register !');
    }

    public function index()
    {
        $produk = Produk::get()
            ->map(function ($produk) {
                return $this->format($produk);
            });
        return $this->result($produk);
    }
}
