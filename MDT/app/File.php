<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function users()
		{
			return $this->hasMany(User::class);
		}
}
