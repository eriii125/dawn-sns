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
        //
        DB::table('users')->insert([
          'username' => '伊藤恵理',
          'mail' => 'itoeri@gmail.com',
          'password' => 'itoeri125',
          'bio' => 'こんにちわ。',
        ]);
    }
}
