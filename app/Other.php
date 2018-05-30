<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    //

    public function othertypes() {
        return $this->hasMany('App\Othertype');
    }
}
