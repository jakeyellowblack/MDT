<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	public function users()
		{
			return $this->hasMany(User::class);
		}
		
		public function clients()
		{
			return $this->hasMany(Client::class);
		}
}
