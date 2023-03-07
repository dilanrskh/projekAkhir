<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_produks')->insert(array(
            array(
                'kategori_produk'          => 'Make Up',
                'slug'                     => 'make-up',
            ),
            array(
                'kategori_produk'          => 'Skincare',
                'slug'                     => 'skincare',
            ),
            array(
                'kategori_produk'          => 'Hair Care',
                'slug'                     => 'hair-care',
            ),
            array(
                'kategori_produk'          => 'Body Care',
                'slug'                     => 'body-care',
            ),
        ));
    }
}
