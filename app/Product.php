<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function country(){
        return $this->belongsTo('App/Country');
    }
    public function segment(){
        return $this->belongsTo('App/Segment');
    }
    public function customer(){
        return $this->belongsTo('App/customer');
    }
    public function event(){
        return $this->hasMany('App/Event');
    }

}
