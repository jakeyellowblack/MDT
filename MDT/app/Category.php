<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	 public function post()
	{
		return $this->belongsTo(Post::class);
	}
}
