<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
		{
			return $this->belongsToMany(User::class);
		}
		
		public function clients()
		{
			return $this->belongsToMany('MDT\Client');
		}
}
