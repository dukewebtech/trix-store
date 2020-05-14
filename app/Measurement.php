<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    protected  $guarded =[''];

    public function stock(){
        $this->hasMany('App\Stock','measurementId');
    }
}
