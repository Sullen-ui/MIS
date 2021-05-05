<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            ['name' => 'Воронова Екатерина Алексеевна','dob' => '31.02.1990','prof_name' => 'Терапевт',
                'id_profession' => 4,'id_branch' => 1,'status' => 1, 'cabinet' => '101','id_user' => 1],
            
            ]);
    }
}
