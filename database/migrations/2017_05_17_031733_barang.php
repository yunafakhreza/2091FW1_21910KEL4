<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Barang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->String('merk');
            $table->String('Tipe');
            $table->integer('harga');
            $table->integer('jumlah_angsuran');
            $table->String('stok');
            $table->String('warna');
            $table->integer('thn_terbit');
            $table->integer('jumlah_cicilan');
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
        Schema::drop('barang');
    }
}
