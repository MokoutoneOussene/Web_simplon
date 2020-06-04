<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    public function apprenants()
    {
        return $this->belongsToMany('App\Apprenants');
    }
}
