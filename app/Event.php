<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function eventType(){
        return $this->belongsTo('App/EventType');
    }
    public function valueAdditionalFields(){
        return $this->hasMany('App/ValueAdditionalField');
    }
    public function product(){
        return $this->belongsTo('App/Product');    }
}
