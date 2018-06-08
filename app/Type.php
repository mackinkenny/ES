<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function products()
    {
        return $this->HasMany('App\Product');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
