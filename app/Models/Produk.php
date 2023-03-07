<?php

namespace App\Models;

use App\Models\MerkProduk;
use App\Models\ImageProduk;
use App\Models\JenisProduk;
use App\Models\KategoriProduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_id',
        'merk_produk',
        'jenis_produk',
        'kategori_produk',
        'nama_produk',
        'kandungan_produk',
        'slug',
        'harga',
        'deskripsi',
        'foto_produk',
        'image_produk_satu',
        'stok',
        'status',
    ];

    public function merkproduk()
    {
        return $this->belongsTo(MerkProduk::class, 'merk_produk', 'id');
    }
    public function jenisproduk()
    {
        return $this->belongsTo(JenisProduk::class, 'jenis_produk', 'id');
    }
    public function kategoriproduk()
    {
        return $this->belongsTo(KategoriProduk::class, 'kategori_produk', 'id');
    }
    public function imageproduk()
    {
        return $this->belongsTo(ImageProduk::class, 'image_produk', 'id');
    }
    public function infoproduk()
    {
        return $this->belongsTo(InfoProduk::class, 'information', 'id');
    }
    public function review()
    {
        return $this->belongsTo(Review::class, 'review', 'id');
    }
}
