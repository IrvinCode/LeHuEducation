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
            'name' => 'Leo',
            'email' => 'leo@gmail.com',
            'password' => bcrypt('secret'),
            'profesor' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'alumno',
            'email' => 'alumno@gmail.com',
            'password' => bcrypt('secret'),
            'profesor' => '0',
        ]);
    }
}
