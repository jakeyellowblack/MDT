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
		$user->email = "Admin@mail.com";
		$user->linkedin_url = "https://www.linkedin.com/in/spidey-a9411a195/";
		$user->file = "spideyb.png";
		$user->password = bcrypt('query');
		$user->save();
		$user->roles()->attach($role_admin);
		
		$user = new User();
		$user->firstname = "Sue";
		$user->lastname = "Storm";
		$user->email = "Client@mail.com";
		$user->linkedin_url = "https://www.linkedin.com/in/invisible-woman-a9411b295/";
		$user->file = "invisible.png";
		$user->password = bcrypt('query');
		$user->save();
		$user->roles()->attach($role_client);
		
		$user = new User();
		$user->firstname = "Peter";
		$user->lastname = "Parker";
		$user->email = "Freelancer@mail.com";
		$user->linkedin_url = "https://www.linkedin.com/in/spidey-theoriginal-a9411a185/";
		$user->file = "parker.png";
		$user->password = bcrypt('query');
		$user->save();
		$user->roles()->attach($role_freelancer);
		
		$user = new User();
		$user->firstname = "Kamala";
		$user->lastname = "Khan";
		$user->email = "User@mail.com";
		$user->linkedin_url = "https://www.linkedin.com/in/ms-marvel-a9411a155/";
		$user->file = "msmarvel.png";		
		$user->password = bcrypt('query');
		$user->save();
		$user->roles()->attach($role_user);
    }
}
