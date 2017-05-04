<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        DB::table('users')->insert([
          [
            'name' => "hello man",
            'email' => "lalala@gmail.com",
            'password' => bcrypt('secret')
          ],
          [
            'name' => "hef2323o 23an",
            'email' => "lalala@gmail.com",
            'password' => bcrypt('secret')
          ],
          [
            'name' => "hsadlo man",
            'email' => "lalala@gmail.com",
            'password' => bcrypt('secret')
          ],
          [
            'name' => "fafaf",
            'email' => "la22lala@gmail.com",
            'password' => bcrypt('secret')
          ],
        ]);
    }

}
