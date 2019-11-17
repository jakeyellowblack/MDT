<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
		{
			return $this->belongsToMany('MDT\User');
		}
}
