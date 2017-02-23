<?php

use Illuminate\Database\Seeder;

class LocalObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('local_objects') ->insert([
           [
               'name' => 'Минск',
               'parent_id' => '2',
               'lead_id' => '1',
               'type' => 'region'
           ]
        ]);
    }
}
