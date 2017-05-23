<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $guarded = ['id'];

    public function barang(){
    	return $this->belongsTo(barang::class);
    }
    public function suplier(){
    	return $this->belongsTo(suplier::class);
    }
}
