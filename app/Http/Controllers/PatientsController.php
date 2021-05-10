<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public static function store($data){

        $patient = Patient::where('name',$data['name'])->where('dob',$data['dob'])->first();

        if(!$patient || $patient->count() == 0 ){

            return Patient::create([
                'polis_num' => $data['polis_num'],
                'polis_comp' => $data['polis_comp'],
                'polis_type' => $data['polis_type'],
                'pasport_serial' => $data['pasport_serial'],
                'pasport_num' => $data['pasport_num'],
                'pasport_who' => $data['pasport_who'],
                'pasport_date' => $data['pasport_date'],
                'snils' => $data['snils'],
                'name' => $data['name'],
                'id_work' => $data['id_work'],
                'gender' => $data['gender'],
                'dob' => $data['dob'],
                'dob_place' => $data['dob_place'],
                'registration' => $data['registration'],
                'resident' => $data['resident'],
                'phone' => $data['phone'],
                'soc_status' => $data['soc_status'],
                'invalid' => $data['invalid'],
                ]);
                
                
        }else{
            $patient->polis_num = $data ['polis_num'];
            $patient->polis_comp = $data ['polis_comp'];
            $patient->polis_type = $data ['polis_type'];
            $patient->pasport_serial = $data ['pasport_serial'];
            $patient->pasport_num = $data ['pasport_num'];
            $patient->pasport_who = $data ['pasport_who'];
            $patient->pasport_date = $data ['pasport_date'];
            $patient->snils = $data ['snils'];
            $patient->name = $data ['name'];
            $patient->id_work = $data ['id_work'];
            $patient->gender = $data ['gender'];
            $patient->dob = $data ['dob'];
            $patient->dob_place = $data ['dob_place'];
            $patient->registration = $data ['registration'];
            $patient->resident = $data ['resident'];
            $patient->phone = $data ['phone'];
            $patient->soc_status = $data ['soc_status'];
            $patient->invalid = $data ['invalid'];
        }

        return $patient;
      
     
    }
}
