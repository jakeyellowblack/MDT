<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	
	public function users()
	{
		return $this->belongsTo('MDT\User', 'id', 'category_id');
	}
}
