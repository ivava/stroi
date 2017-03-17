<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
                [
                    'name' => 'Минск'
                ],
                [
                    'name' => 'Гомельская область'
                ],
                [
                    'name' => 'Брестская область'
                ],
                [
                    'name' => 'Витебская область'
                ],
                [
                    'name' => 'Гродненская область'
                ],
                [
                    'name' => 'Минская область'
                ],
                [
                    'name' => 'Могилёвская область'
                ]
                ]

        );
}
}