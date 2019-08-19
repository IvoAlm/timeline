<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventTypeAdditionalField extends Model
{
    public function eventType(){
        return $this->belongsTo('App/EventType');
    }
    public function additionalField(){
        return $this->belongsTo('App/AdditionalField');
    }
}
