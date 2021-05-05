<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->insert([
            ['id_doctor' => 1,
            'template' => 'hgjhjghjfgjfghjgfj',
            'name' => 'Осмотр врача',
            'id_branch' => 1],
            ]);
    }
}
