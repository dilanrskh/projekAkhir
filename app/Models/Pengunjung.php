<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'tanggal_lahir',
        'tempat_lahir',
        'jenis_kelamin',
        'no_telp',
        'alamat',
        'bio',
        'role',
        'image_user',
    ];
}
