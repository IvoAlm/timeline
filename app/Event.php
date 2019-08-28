<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function type(){
        return $this->belongsTo('App/EventType');
    }
    public function value(){
        return $this->hasMany('App/ValueAdditionalField');
    }
    public function product(){
        return $this->belongsTo('App/Product');    }
}
