<?php

use Illuminate\Database\Seeder;
use MDT\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
		$role->name = "admin";
		$role->save();
		
		$role = new Role();
		$role->name = "client";
		$role->save();
		
		$role = new Role();
		$role->name = "freelancer";
		$role->save();
		
		$role = new Role();
		$role->name = "user";
		$role->save();
    }
}
