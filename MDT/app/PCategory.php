<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class PCategory extends Model
{
	protected $fillable = [
		'name',
		'excerpt',
	];
	
	
    public function post()
	{
		return $this->belongsTo(Post::class);
	}
}
