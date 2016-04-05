<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    $faker = Faker::create();
	    foreach (range(1,10) as $index) {
		    DB::table('posts')->insert([
			    'post_title' => $faker->realText($maxNbChars = 50, $indexSize = 2),
			    'post_content' => $faker->realText($maxNbChars = 1000, $indexSize = 2),
			    'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now')
		    ]);
	    }

    }
}
