<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [
               'name' => 'Санкт-Петербург',
                'region' => 1
            ],
            [
                'name' => 'Казань',
                'region' => '2'
            ]
    ]);
    }
}
