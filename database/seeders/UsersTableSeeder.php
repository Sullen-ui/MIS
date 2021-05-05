<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['Login' => 'Admin','password' => 'Admin','type' => 0, 'id_branch' => 1],
            ['Login' => 'Doctor','password' => '123123123','type' => 1, 'id_branch' => 1],
            ['Login' => 'Registrator','password' => 'Registrator1','type' => 2, 'id_branch' => 1],
            ['Login' => 'Operator','password' => 'Operator1','type' => 3, 'id_branch' => 1],
            
            ]);
    }
}
