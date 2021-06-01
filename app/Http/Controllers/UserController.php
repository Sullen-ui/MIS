<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function delete($id){
        User::where('id', $id)->delete();

        return back();
    }

    public function create(Request $request){
        User::create([
            'login' => $request->login,
            'password' =>Hash::make($request->password),
            'type' => $request->type,
            'id_branch' => $request->id_branch,

        ]);

            return response()->json(
                [
                    'status' => true,
                    'message' => "Пользователь добавлен"
                ]
                );
    }
}
