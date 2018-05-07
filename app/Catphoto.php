<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catphoto extends Model
{
    //
    public function category() {
        return $this->belongsTo('App\Category');
    }
}
