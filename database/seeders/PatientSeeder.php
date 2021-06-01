<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            ['name' => 'Николайко Ашот Григорьич',
             'polis_num' => 123123123123,
             'polis_comp'=> 'РосСтрах',
             'polis_type'=>2,
             'gender'=>'М',
             'work_place'=>'ЖелДорУчет',
             'dob' =>'01.01.2001',
             ],
             ['name' => 'Горб Николай Васильевич',
             'polis_num' => 123123123122,
             'polis_comp'=> 'Cтраховая Компания 1',
             'polis_type'=>1,
             'gender'=>'М',
             'work_place'=>'СТО',
             'dob'=>'01.01.1961',
             ],
             ['name' => 'Ник Олег Петрович',
             'polis_num' => 1232342453452,
             'polis_comp'=> 'CтрахОВальщик',
             'polis_type'=>3,
             'gender'=>'М',
             'work_place'=>'ЖелДорУчет',
             'dob'=>'01.01.1972',
             ],
             ['name' => 'Петренко Ольга Михайловна',
             'polis_num' => 1232345733452,
             'polis_comp'=> 'CтрахОВальщик',
             'polis_type'=>3,
             'gender'=>'Ж',
             'work_place'=>'ООО "Маник"',
             'dob'=>'10.03.1975',
             ],
             ['name' => 'Франц Марина Евгеньевна',
             'polis_num' => 1232342453452,
             'polis_comp'=> 'CтрахОВальщик',
             'polis_type'=>3,
             'gender'=>'Ж',
             'work_place'=>'ООО "Маник"',
             'dob'=>'10.03.1975',
             ],
                      
            ]);
    }
}
