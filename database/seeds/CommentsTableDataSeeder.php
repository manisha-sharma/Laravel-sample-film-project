<?php

use Illuminate\Database\Seeder;

class CommentsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([

	            'name' => 'xyz',

	            'comments' => 'testcomment',

	            'user_id' =>1,
				'film_id'=>2,

		]);
		DB::table('comments')->insert([

	            'name' => 'xyz',

	            'comments' => 'testcomment',

	            'user_id' =>1,
				'film_id'=>3,

		]);
		DB::table('comments')->insert([

	            'name' => 'xyz',

	            'comments' => 'testcomment',

	            'user_id' =>1,
				'film_id'=>18,

		]);
    }
}
