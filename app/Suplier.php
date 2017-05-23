<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table = 'suplier';
    protected $guarded = ['id'];

    public function pemesanan(){
    	return $this->hasMany(pemesanan::class);
    }
}
