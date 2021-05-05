<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
           //    \App\Models\Branch::factory(10)->create();

    

    $this->call(BranchTableSeeder::class);
    $this->call(ProfessionsTableSeeder::class);
    $this->call(UsersTableSeeder::class);
    $this->call(DoctorsTableSeeder::class);
    $this->call(TimeTableSeeder::class);
    
    }
}
