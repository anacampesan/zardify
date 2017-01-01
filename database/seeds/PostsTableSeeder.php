<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert([
          'user_id' => 1,
          'title' => str_random(15),
          'category_id' => rand(1, 3),
          'body_en' => str_random(100),
          'body_pt' => str_random(100),
          'body_fr' => str_random(100),
          'instagram_url' => '1'
      ]);
    }
}
