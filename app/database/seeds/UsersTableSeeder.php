<?php

use Faker\Factory as Faker;
use Shop\Users\User;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 50) as $index)
        {
            User::create([
                'username' => $faker->userName. $index,
                'email' => $faker->email,
                'password' => 'secret',
                'house_number' => $faker->buildingNumber,
                'street' => $faker->streetName . ' ' . $faker->streetSuffix,
                'town' => $faker->city,
                'country' => $faker->country,
                'postcode' => $faker->postcode]);
        }
    }
}
 