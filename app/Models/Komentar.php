<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_id',
        'name',
        'nama_produk',
        'komentar',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'nama_produk', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'name', 'id');
    }
}
