<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    public function events(){
        return $this->hasMany('App/Event');
    }
    public function eventTypeAdditionalField(){
        return $this->hasMany('App/EventTypeAdditionalField');
    }
}
