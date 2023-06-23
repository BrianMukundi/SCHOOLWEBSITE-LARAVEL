<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    //
    function login(Request $req)
    {
       $user= users::where(['user_name' => $req ->user_name]) -> first();
      
       if (!$user || Hash::check($req ->password, $user ->password))
       {
        return "username or Password is not matched";
       }else{

        $req -> session()-> put('user',$user);

        return redirect('/d');
       }
    }

}
