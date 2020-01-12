<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $fillable = [
		'user_id',
	];
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
