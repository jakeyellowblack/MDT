<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	public function users()
		{
			return $this->hasMany(User::class);
		}
}
