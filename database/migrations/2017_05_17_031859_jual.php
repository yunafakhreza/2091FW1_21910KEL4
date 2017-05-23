<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jual', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('barang_id',false,true);
            $table->foreign('barang_id')->references('id')->on('barang')->onDelete('cascade')->onUpdate('cascade');            
            $table->integer('konsumen_id',false,true);
            $table->foreign('konsumen_id')->references('id')->on('konsumen')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tgl_beli');
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
        Schema::drop('jual');
    }
}
