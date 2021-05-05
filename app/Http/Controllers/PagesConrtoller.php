<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesConrtoller extends Controller
{
    public function ShowAuth(){
        return view('auth/login');
    }
       
    
}
