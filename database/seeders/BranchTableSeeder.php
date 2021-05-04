<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Branch::table('users')->insert([
            'name' => str_random(10),
            'Service_status' => int_random(0,1),
            'Short_name' => bcrypt('secret'),////////Поменяй блять это
        ]);
    }
}
