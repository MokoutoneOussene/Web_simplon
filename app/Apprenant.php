<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
   public function projets()
   {
       return $this->belongsToMany('App\projet');
   }
}
