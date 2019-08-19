<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
   public function products(){
       return $this->hasMany('App/Product');
   }
}
