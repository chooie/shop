<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Shop\Users\User;
use Shop\Comments\UserComment;

class UserCommentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        $userIds = User::lists('id');

        foreach(range(1, 200) as $index)
        {
            UserComment::create([
                'user_id' => $faker->randomElement($userIds),
                'commenter_id' => $faker->randomElement($userIds),
                'body' => implode(" ", $faker->sentences())
            ]);
        }
	}

}