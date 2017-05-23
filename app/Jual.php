<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jual extends Model
{
    protected $table = 'jual';
    protected $guarded = ['id'];

    public function barang(){
    	return $this->belongsTo(barang::class);
    }
    public function konsumen(){
    	return $this->belongsTo(konsumen::class);
    }
    public function angsuran(){
    	return $this->hasMany(angsuran::class);
    }
}
