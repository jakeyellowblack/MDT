<?php

use Illuminate\Database\Seeder;
use MDT\Role;
use MDT\User;

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
		$user->firstname = "Miles";
		$user->lastname = "Morales";
		$user->email = "Admin@mai.com";
		$user->password = bcrypt('query');
		$user->save();
		$user->roles()->attach($role_admin);
		
		$user = new User();
		$user->firstname = "Sue";
		$user->lastname = "Storm";
		$user->email = "Client@mai.com";
		$user->password = bcrypt('query');
		$user->save();
		$user->roles()->attach($role_client);
		
		$user = new User();
		$user->firstname = "Peter";
		$user->lastname = "Parker";
		$user->email = "Freelancer@mai.com";
		$user->password = bcrypt('query');
		$user->save();
		$user->roles()->attach($role_freelancer);
		
		$user = new User();
		$user->firstname = "Kamala";
		$user->lastname = "Khan";
		$user->email = "User@mai.com";
		$user->password = bcrypt('query');
		$user->save();
		$user->roles()->attach($role_user);
    }
}
