<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
     protected $fillable = [
		'name',
	];
	
	public function post()
	{
		return $this->belongsTo(Post::class);
	}
}
