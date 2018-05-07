<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    public function autotypes() {
        return $this->hasMany('App\Autotype');
    }
}
