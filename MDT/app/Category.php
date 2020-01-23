<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	 public function post()
	{
		return $this->belongsTo(Post::class);
	}

	 public function job()
	{
		return $this->belongsTo(Job::class);
	}

	public function freelancer()
	{
		return $this->hasOne(Freelancer::class);
	}
}
