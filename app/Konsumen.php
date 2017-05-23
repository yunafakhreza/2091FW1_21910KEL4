<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
   protected $table = 'konsumen';
   protected $guarded = ['id'];

   public function jual(){
   		return $this->hasMany(jual::class);
   }
	public function user(){
		return $this->belongsTo(user::class);
	}   
}
