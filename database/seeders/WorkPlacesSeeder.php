<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkPlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_places')->insert([
            ['name' => 'ОАО хахаха'],
            ['name' => 'ЖелДор учет'],
            ['name' => 'Пятерочка'],
                      
            ]);
    }
}
