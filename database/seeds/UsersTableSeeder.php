<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
            [
                'name' => 'ivan',
                'email' => 'ivan',
                'password' => bcrypt('anna'),
                'departament' => '1',
                'position' => 'cio',
                'parent_user' => '0',
                'city' => 1,
                'region' => '1'
            ],
            [
                'name' => 'Anna',
                'email' => 'anna',
                'password' => bcrypt('e24c2a16'),
                'departament' => '1',
                'position' => '2',
                'parent_user' => '1',
                'city' => 1,
                'region' => '1'
            ]
        ]);
    }
}
