<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdditionalField extends Model
{
    public function type(){
        return $this->hasMany('App/EventTypeAdditionalField');
    }
    public function value(){
        return $this->hasMany('App/ValueAdditionalField');
    }
}
