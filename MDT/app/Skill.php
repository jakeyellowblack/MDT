<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
	protected $fillable = [
		'name',
	];
	
    public function post()
	{
		return $this->belongsToMany(Post::class);
	}
}
