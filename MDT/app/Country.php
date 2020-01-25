<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	public function user()
		{
			return $this->hasOne(User::class);
		}
		
		public function clients()
		{
			return $this->hasMany(Client::class);
		}
}
