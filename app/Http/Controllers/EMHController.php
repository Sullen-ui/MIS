<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EMH;

class EMHController extends Controller
{
    public function create(Request $request){

        $emh = EMH::create([

            'id_patient' =>  $request->id_patient,
            'id_doctor' =>   $request->id_doctor,
            'create_date' =>  date('d.m.Y'),
            'description' => $request->description,
            'name' => $request->name
        
        ]);


    }
}
