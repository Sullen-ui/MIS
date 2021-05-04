<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('branches')->insert([
            'name' => Str::random(10),
            'Service_status' => rand(0,1),
            'Short_name' => Str::random(5),
        ]);
    }
}
