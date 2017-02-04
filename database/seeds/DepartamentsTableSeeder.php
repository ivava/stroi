<?php

use Illuminate\Database\Seeder;

class DepartamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departaments')->insert([
            [
                'name' => 'Отдел лени',
                'city' => '1',
                'region' => '1',
                'lead' => '2',
                'workman_count' => '10'
            ],
            [
                'name' => 'Отдел бани',
                'city' => '2',
                'region' => '2',
                'lead' => '2',
                'workman_count' => '25'
            ]
        ]);
    }
}
