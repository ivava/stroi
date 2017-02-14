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
               'name' => 'ГУО УГЗ МЧБ РБ',
                'region_id' => 1
            ],
            [
                'name' => 'ЗаводскоЙ зайонный отдел по ЧС',
                'region_id' =>     1
            ],
            [
                'name' => 'Ленинский районный отдел по ЧС',
                'region_id' => 1
            ],
            [
                'name' => 'Московский районный отдел по ЧС',
                'region_id' => 1
            ],
            [
                'name' => 'Октябрьский районный отдел по ЧС',
                'region_id' => 1
            ],
            [
                'name' => 'ПАСО по охране Минского метрополитена',
                'region_id' => 1
            ],
            [
                'name' => 'ПТЦ Минского УМЧС',
                'region_id' => 1
            ],
            [
                'name' => 'Партизанский районный отдел по ЧС',
                'region_id' => 1
            ],
            [
                'name' => 'Первомайский районный отдел по ЧС',
                'region_id' => 1
            ],
            [
                'name' => 'Советский районный отдел по ЧС',
                'region_id' => 1
            ],
            [
                'name' => 'Учебный центр Минского УМЧС',
                'region_id' => 1
            ],
            [
                'name' => 'Фрунзенский районный отдел по ЧС',
                'region_id' => 1
            ],
            [
                'name' => 'ЦОУ г. Минск УМЧС',
                'region_id' => 1
            ],
            [
                'name' => 'Центральный районный отдел по ЧС',
                'region_id' => 1
            ],
            [
                'name' => 'Штаб ЛСЧ г. Минск УМЧС',
                'region_id' => 1
            ]


    ]);
    }
}
