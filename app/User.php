<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
    ];
    
    public function skills() {
        return $this -> hasMany('App\Skill');
    }
}
