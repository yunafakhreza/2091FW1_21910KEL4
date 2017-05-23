<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $guarded = ['id'];

    public function admin(){
    	return $this->belongsTo(admin::class);
    }
}
