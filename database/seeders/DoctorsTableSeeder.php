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
                'id_profession' => 4,'id_branch' => 1,'status' => 1, 'cabinet' => '101','id_user' => 2],
            ['name' => 'Уварова Ольга Петровна','dob' => '31.02.1996','prof_name' => 'Хирург',
                'id_profession' => 7,'id_branch' => 2,'status' => 1, 'cabinet' => '115','id_user' => 4],
            ['name' => 'Петренко Мария Ивановна','dob' => '31.02.1993','prof_name' => 'Гинеколог',
                'id_profession' => 8,'id_branch' => 2,'status' => 1, 'cabinet' => '116','id_user' => 5],
            ]);
            
    }
}
