<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Othertype extends Model
{
    //
    public function other()
    {
        return $this->belongsTo('App\Other');
    }
}
