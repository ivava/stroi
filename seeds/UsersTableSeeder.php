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
                'isAdmin' => true,
                'position' => 'cio',
                'parent_user' => 0,
                'local_id' => 1,
            ]
        ]);
    }
}
