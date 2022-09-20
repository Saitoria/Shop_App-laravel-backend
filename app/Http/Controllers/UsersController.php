<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login(Request $request)
    {
        //return $loginDetails = $request->only('username','password');


        $username = request('username');
        $password = request('password');
        //error_log($username);
        $users = Users::where('username',$username)
                        ->where('password',$password)
                     ->get();
    
        //$users = Users::all();
        if(!($users->isEmpty()))
        {
            return response()->json(['message'=>'login successful','code'=>200,'access'=>true]);
        }
         else
         {
            return response()->json(['message'=>'login not successful','code'=>501,'access'=>false]);
         } 

    }




}
