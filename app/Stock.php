<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $guarded = [''];

    public function measurement (){
        return $this->belongsTo('App\Measurement', 'measurementId');
    }
}
