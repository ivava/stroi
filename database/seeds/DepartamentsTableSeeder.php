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
                'name' => 'ПАСЧ №14 г.Минск',
                'city_id' => 2,
                'region_id' => 1,
                'lead' => 2,
                'workman_count' => 10
            ],
            [
                'name' => 'ПАСЧ №14 г.Минск',
                'city_id' => 2,
                'region_id' => 1,
                'lead' => 2,
                'workman_count' => 25
            ],
            [
                'name' => 'ПАСЧ №21 РУП МАЗ',
                'city_id' => 2,
                'region_id' => 1,
                'lead' => 2,
                'workman_count' => 10
            ],
            [
                'name' => 'ПАСЧ №27 ТЭЦ-3 Минскэнерго и МП3',
                'city_id' => 2,
                'region_id' => 1,
                'lead' => 2,
                'workman_count' => 10
            ],
            [
                'name' => 'ПАСЧ №3 г. Минск',
                'city_id' => 2,
                'region_id' => 1,
                'lead' => 2,
                'workman_count' => 10
            ],
            [
                'name' => 'ЦОУ',
                'city_id' => 2,
                'region_id' => 1,
                'lead' => 2,
                'workman_count' => 10
            ]

        ]);
    }
}
