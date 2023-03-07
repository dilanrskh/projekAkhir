<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MerkProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merk_produks')->insert(array(
            array(
                'merk_produk'          => 'Azarine',
                'slug'                 => 'azarine',
            ),
            array(
                'merk_produk'          => 'Emina',
                'slug'                 => 'emina',
            ),
            array(
                'merk_produk'          => 'Wardah',
                'slug'                 => 'wardah',
            ),
            array(
                'merk_produk'          => 'Somethinc',
                'slug'                 => 'somethinc',
            ),
            array(
                'merk_produk'          => 'Sariayu',
                'slug'                 => 'sariayu',
            ),
            array(
                'merk_produk'          => 'Viva',
                'slug'                 => 'viva',
            ),
            array(
                'merk_produk'          => 'Pyunkang Yull',
                'slug'                 => 'pyunkang-yull',
            ),
            array(
                'merk_produk'          => 'Avoskin',
                'slug'                 => 'avoskin',
            ),
            array(
                'merk_produk'          => 'Viva',
                'slug'                 => 'viva',
            ),
            array(
                'merk_produk'          => 'Npure',
                'slug'                 => 'npure',
            ),
            array(
                'merk_produk'          => 'Loreal',
                'slug'                 => 'loreal',
            ),
            array(
                'merk_produk'          => 'Implora',
                'slug'                 => 'implora',
            ),
            array(
                'merk_produk'          => 'Nivea',
                'slug'                 => 'nivea',
            ),
            array(
                'merk_produk'          => 'Scarlett',
                'slug'                 => 'scarlett',
            ),
            array(
                'merk_produk'          => 'Poise',
                'slug'                 => 'poise',
            ),
            array(
                'merk_produk'          => 'Marina',
                'slug'                 => 'marina',
            ),
            array(
                'merk_produk'          => 'Pigeon',
                'slug'                 => 'pigeon',
            ),
            array(
                'merk_produk'          => 'Citra',
                'slug'                 => 'citra',
            ),
            array(
                'merk_produk'          => 'Madame Gie',
                'slug'                 => 'madame-gie',
            ),
        ));
    }
}
