<?php

use Illuminate\Database\Seeder;
use MDT\Subcategory;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $subcategory = new Subcategory();
		$subcategory->name= "WordPress";
		$subcategory->category_id=2;
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Front End Developers";
		$subcategory->category_id=2;
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Back End Development";
		$subcategory->category_id=2;
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Game Development";
		$subcategory->category_id=2;
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Web Programming";
		$subcategory->category_id=2;
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Mobile Apps";
		$subcategory->category_id=2;
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Software Engineer";
		$subcategory->category_id=2;
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Data Analysis & Reports";
		$subcategory->category_id=2;
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Full stack";
		$subcategory->category_id=2;
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Web Development";
		$subcategory->category_id=2;
		$subcategory->save();

		$subcategory = new Subcategory();
		$subcategory->name= "Articles & Blog Posts";
		$subcategory->category_id=3
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Technical Writing";
		$subcategory->category_id=3
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Translation";
		$subcategory->category_id=3
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Research & Summaries";
		$subcategory->category_id=3
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Ecommerce / Commerce Writing";
		$subcategory->category_id=3
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Content Writing";
		$subcategory->category_id=3
		$subcategory->save();
		$subcategory = new Subcategory();
		$subcategory->name= "Editing and Proofing";
		$subcategory->category_id=3
		$subcategory->save();
	

    }
}
