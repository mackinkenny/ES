<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otherphoto extends Model
{
    //
    public function other() {
        return $this->belongsTo('App\Other');
    }
}
