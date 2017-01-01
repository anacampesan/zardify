<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Ana Raquel Campesan',
          'email' => 'ana@zardify.com',
          'username' => 'anazard',
          'password' => md5('ana2323'),
          'photo' => 'https://instagram.ffor8-2.fna.fbcdn.net/t51.2885-19/15101747_1252605404830355_8710393877598568448_a.jpg',
          'twitter' => 'https://twitter.com/anazard',
          'facebook' => 'anazards',
          'instagram' => 'anazard',
          'spotify' => 'anakampz',
          'website' => 'zardify.com',
          'bio' => 'Technology, music and cool stuff is what I am all about.'

      ]);
    }
}
