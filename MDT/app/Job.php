<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $fillable = [
		'title',
		'price',
		'description',
		'user_id',
		'category_id',
		'time_id',
	];


	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
	public function category()
	{
		return $this->belongsTo(Category::class);
	}
	
	public function time()
	{
		return $this->belongsTo(Time::class);
	}

	public function skill()
	{
		return $this->belongsToMany(Skill::class, 'post_skill');
	}
}
