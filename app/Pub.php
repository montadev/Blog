<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pub extends Model
{
    
    protected $fillable=['title','date_debut','date_fin','image'];

    public function getImageAttribute($value)
    {
        return asset('front/pub/'.$value);
    }
}
