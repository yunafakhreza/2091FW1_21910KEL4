<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';
    protected $guarded = ['id'];

    public function admin(){
        return $this->hasOne(admin::class);
    }
    public function konsumen(){
        return $this->hasOne(konsumen::class);
    }
}
