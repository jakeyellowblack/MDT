<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	
	public function users()
		{
			return $this->hasMany(User::class, 'category_id');
		}

}
