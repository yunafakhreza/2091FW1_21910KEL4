<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    protected $table = 'angsuran';
    protected $guarded = ['id'];

    public function jual(){
    	return $this->belongsTo(jual::class);
    }
}
