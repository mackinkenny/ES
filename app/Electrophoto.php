<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electrophoto extends Model
{
    //
    public function electro() {
        return $this->belongsTo('App\Electro');
    }
}
