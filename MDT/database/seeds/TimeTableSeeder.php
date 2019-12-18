<?php

use Illuminate\Database\Seeder;
use MDT\Time;

class TimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = new Time();
        $time->name= "Full Time";
        $time->save();
		
		$time = new Time();
        $time->name= "Half Time";
        $time->save();
    }
}
