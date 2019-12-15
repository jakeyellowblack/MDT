<?php

namespace MDT;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
        protected $fillable = ['firstnameC', 'lastnameC', 'country_idC', 'category_idC', 'emailC', 'passwordC',];

}

