<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buildmaterphoto extends Model
{
    //
    public function buildmater() {
        return $this->belongsTo('App\Buildmater');
    }
}
