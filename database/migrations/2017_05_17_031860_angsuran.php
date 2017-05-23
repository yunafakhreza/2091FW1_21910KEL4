<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Angsuran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angsuran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sisa_cicilan');
            $table->integer('cicilan_ke');
            $table->integer('total_bayaran');
            $table->integer('jumlah_cicilan');
            $table->integer('pembayaran');
            $table->date('tgl_pembayaran');
            $table->integer('jual_id',false,true);
            $table->foreign('jual_id')->references('id')->on('jual')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('angsuran');
    }
}
