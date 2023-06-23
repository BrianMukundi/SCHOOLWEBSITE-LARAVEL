<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    //
    function admin(Request $req)
    {
       $user= admin::where(['user_name' => $req ->user_name]) -> first();
      
       if (!$user || Hash::check($req ->password, $user ->password))
       {
        return "username or Password is not matched";
       }else{

        $req -> session()-> put('admin',$user);

        return redirect('/admin');
       }
    }

}
