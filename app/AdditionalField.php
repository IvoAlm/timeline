<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdditionalField extends Model
{
    public function eventTypeAdditionalField(){
        return $this->hasMany('App/EventTypeAdditionalField');
    }
    public function valueAdditionalFields(){
        return $this->hasMany('App/ValueAdditionalField');
    }
}
