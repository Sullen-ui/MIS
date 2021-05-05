<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\Hash;

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
            ['Login' => 'Admin','password' => Hash::make('Admin'),'type' => 0, 'id_branch' => 1],
            ['Login' => 'Doctor','password' => Hash::make('Doctor'),'type' => 1, 'id_branch' => 1],
            ['Login' => 'Registrator','password' => Hash::make('Registrator'),'type' => 2, 'id_branch' => 1],
            ['Login' => 'Operator','password' => Hash::make('Operator'),'type' => 3, 'id_branch' => 1],
            
            ]);
    }
}
