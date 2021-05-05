<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function ShowAuth(){
        return view('auth/login');
    }
       
    public function BasePatientShow(Request $request){
        if($request->search){
            $patients = Patient::where('name', 'LIKE', "%$request->search%")->orWhere('polis_num', 'LIKE', "$request->search%")->paginate(15);
            $request->flashOnly(['search']);
        }else{
            $patients = Patient::paginate(15);
        }
        
        return view('basePatients', [
            "patients" => $patients
        ]);

    }
    
}
