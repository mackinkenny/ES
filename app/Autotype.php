<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autotype extends Model
{
    //
    public function auto()
    {
        return $this->belongsTo('App\Auto');
    }
}
