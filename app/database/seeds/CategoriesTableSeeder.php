<?php

use Shop\Categories\Category;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
        Category::create([
            'category' => 'Luxury'
        ]);
        Category::create([
            'category' => 'Postmodern'
        ]);
        Category::create([
            'category' => 'Authentic'
        ]);
        Category::create([
            'category' => 'Reproduction'
        ]);
	}

}