<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_produks')->insert(array(
            array(
                'jenis_produk'          => 'Sheetmask',
                'slug'                  => 'sheetmask',
            ),
            array(
                'jenis_produk'          => 'Toner',
                'slug'                  => 'toner',
            ),
            array(
                'jenis_produk'          => 'Face Wash',
                'slug'                  => 'face-wash',
            ),
            array(
                'jenis_produk'          => 'Moisturizer',
                'slug'                  => 'moisturizer',
            ),
            array(
                'jenis_produk'          => 'Sunscreen',
                'slug'                  => 'sunscreen',
            ),
            array(
                'jenis_produk'          => 'Body Lotion',
                'slug'                  => 'body-lotion',
            ),
            array(
                'jenis_produk'          => 'Serum',
                'slug'                  => 'serum',
            ),
            array(
                'jenis_produk'          => 'Essence',
                'slug'                  => 'essence',
            ),
            array(
                'jenis_produk'          => 'Liptint',
                'slug'                  => 'liptint',
            ),
            array(
                'jenis_produk'          => 'Pensil Alis',
                'slug'                  => 'pensil-alis',
            ),
            array(
                'jenis_produk'          => 'Mascara',
                'slug'                  => 'mascara',
            ),
            array(
                'jenis_produk'          => 'Eyeshadow',
                'slug'                  => 'eyeshadow',
            ),
        ));
    }
}
