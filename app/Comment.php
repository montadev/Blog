<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = ['body','post_id','name'];


      public function post()
		{
		  return $this->belongsTo('App\Post');
		}
}
