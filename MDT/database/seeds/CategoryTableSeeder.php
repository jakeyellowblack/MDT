<?php

use Illuminate\Database\Seeder;
use MDT\Category;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name= "Audio-video Production";
        $category->save();

        $category = new Category();
        $category->name= "Development / Programming";
        $category->save();

        $category = new Category();
        $category->name= "Copywriting";
        $category->save();

        $category = new Category();
        $category->name= "Graphic & Design";
        $category->save();
    }
}
