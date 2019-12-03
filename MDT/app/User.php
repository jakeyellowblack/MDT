<?php

namespace MDT;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;


class User extends Authenticatable
{
    use Notifiable;
	
	public function roles()
		{
			return $this->belongsToMany('MDT\Role');
		}
		
	
		
	public function autorizeRoles($roles)
	{
			if($this->hasAnyRole($roles))
				{
				return true;
				}
			
		abort(401, 'No estás autorizado para entrar a esta área');	
	}
	
	public function hasAnyRole($roles)
	{
			if(is_array($roles))
				{
					foreach($roles as $role)
						{
			
							if($this->hasRole($roles))
								{
									return true;
								}
						}
			
				}
	
			else
				{
					if($this->hasRole($roles))
						{
							return true;
						}
				}
			return false;

	}


	public function hasRole($role)
	{
			if($this->roles()->where('firstname',$role)->first())
				{
					return true;
				}
		return false;
	}

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'country', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
