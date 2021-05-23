<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public static function RoleCheck($roleArray){

        $roleArray = explode(',', $roleArray);

        if(in_array(Auth::user()->type, $roleArray )){
            return true;
        }else{
            return false;
            }


    }
}
