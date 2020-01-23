<?php

use Illuminate\Database\Seeder;
use MDT\Role;
use MDT\User;
use MDT\Country;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name','admin')->first();
		
		$role_client = Role::where('name','client')->first();
		
		$role_freelancer = Role::where('name','freelancer')->first();
		
		$role_user = Role::where('name','user')->first();
		
		$user = new User();
		$user->country_id = 15;
		$user->firstname = "Miles";
		$user->lastname = "Morales";
		$user->email = "Admin@mail.com";
		$user->password = bcrypt('query');
		$user->approved = 1;
		$user->save();
		$user->roles()->attach($role_admin);
		
		$user = new User();
		$user->country_id = 11;
		$user->firstname = "Sue";
		$user->lastname = "Storm";
		$user->email = "Client@mail.com";
		$user->password = bcrypt('query');
		$user->approved = 1;
		$user->save();
		$user->roles()->attach($role_client);
		
		$user = new User();
		$user->country_id = 16;
		$user->firstname = "Peter";
		$user->lastname = "Parker";
		$user->email = "Freelancer@mail.com";
		$user->password = bcrypt('query');
		$user->approved = 0;
		$user->save();
		$user->roles()->attach($role_freelancer);
		
		$user = new User();
		$user->country_id = 37;
		$user->firstname = "Kamala";
		$user->lastname = "Khan";
		$user->email = "User@mail.com";	
		$user->password = bcrypt('query');
		$user->approved = 0;
		$user->save();
		$user->roles()->attach($role_freelancer);

		$user = new User();
		$user->country_id = 244;
		$user->firstname = "Arie";
		$user->lastname = "Eskinazi";
		$user->email = "Arieleon25@yahoo.com";	
		$user->password = bcrypt('9862489');
		$user->approved = 1;
		$user->save();
		$user->roles()->attach($role_admin);



    }
}
