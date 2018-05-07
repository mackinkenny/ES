<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autophoto extends Model
{
    //
    public function auto() {
        return $this->belongsTo('App\Auto');
    }
}
