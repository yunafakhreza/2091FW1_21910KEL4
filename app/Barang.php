<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table  = 'barang';
    protected $guarded = ['id'];

    public function jual(){
    	return $this->hasMany(Jual::class);
    }
    public function pemesanan(){
    	return $this->hasMany(pemesanan::class);
    }
}
