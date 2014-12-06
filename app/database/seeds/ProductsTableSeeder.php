<?php

use Faker\Factory as Faker;
use Shop\Products\Product;
use Shop\Users\User;

class ProductsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
        $userIds = User::lists('id');
        foreach(range(1, 1000) as $index)
        {
            Product::create([
                'name' => $faker->word(),
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 1000),
                'user_id' => $faker->randomElement($userIds),
                'created_at' => $faker->dateTime()
            ]);
        }
    }

}