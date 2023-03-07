<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerkProduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk_produk',
        'slug',
    ];

}
