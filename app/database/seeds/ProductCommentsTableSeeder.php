<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Shop\Products\Product;
use Shop\Users\User;
use Shop\Comments\ProductComment;

class ProductCommentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        $productIds = Product::lists('id');
        $userIds = User::lists('id');

		foreach(range(1, 1000) as $index)
		{
			ProductComment::create([
                'product_id' => $faker->randomElement($productIds),
                'commenter_id' => $faker->randomElement($userIds),
                'body' => implode(" ", $faker->sentences())
			]);
		}
	}

}