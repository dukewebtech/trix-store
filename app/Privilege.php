<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    public function user(){
        return $this->hasMany('App\User', 'privilegeId');
    }
}
