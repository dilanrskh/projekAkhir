<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageProduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_id',
        'nama_produk',
        'image_produk',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'nama_produk', 'id');
    }
}
