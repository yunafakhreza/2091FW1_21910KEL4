<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'Admin';
    protected $guarded = ['id'];

    public function User(){
    	return $this->belongsTo(User::class);
    }
    public function berita(){
        return $this->hasOne(berita::class);
    }
}
