<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buildtoolphoto extends Model
{
    //
    public function buildtool() {
        return $this->belongsTo('App\Buildtool');
    }
}
