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
            'name' => 'j@gmail.com',
            'email' => 'j@gmail.com',
            'password' => Hash::make('j@gmail.com'),
        ]);
    }
}
