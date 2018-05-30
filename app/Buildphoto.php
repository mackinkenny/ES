<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buildphoto extends Model
{
    //
    public function build() {
        return $this->belongsTo('App\Build');
    }
}
