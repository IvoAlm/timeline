<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValueAdditionalField extends Model
{
    public function additionalField(){
        return $this->belongsTo('App/AdditionalField');
    }
    public function event(){
        return $this->belongsTo('App/Event');
    }
}
