<?php

namespace App\Models;

use App\Models\MerkProduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageBrand extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_id',
        'merk_produk',
        'image_brand',
    ];

    public function merkproduk()
    {
        return $this->belongsTo(MerkProduk::class, 'merk_produk', 'id');
    }
}
