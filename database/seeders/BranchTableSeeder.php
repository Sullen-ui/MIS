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
            ['name' => 'Поликлиника №1','Service_status' => 0,'Short_name' => 'П1'],
            ['name' => 'Стационар','Service_status' => 0,'Short_name' => 'СТАЦ']
            ]);
    }
}
