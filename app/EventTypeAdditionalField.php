<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventTypeAdditionalField extends Model
{
    public function type(){
        return $this->belongsTo('App/EventType');
    }
    public function field(){
        return $this->belongsTo('App/AdditionalField');
    }
}
