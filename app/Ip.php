<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
    protected $fillable = ['adress','post_id'];



    public function post()
		{
		  return $this->belongsTo('App\Post');
		}
}
