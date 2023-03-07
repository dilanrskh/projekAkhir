<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('merk_produk');
            $table->bigInteger('jenis_produk');
            $table->bigInteger('kategori_produk');
            $table->string('nama_produk');
            $table->string('kandungan_produk');
            $table->string('slug');
            $table->integer('harga');
            $table->text('deskripsi');
            $table->string('foto_produk');
            $table->integer('stok')->nullable();
            $table->integer('status')->default(1);
            /**
             * Status :
             * 1 = Tersedia
             * 2 = Penuh
             */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
};
