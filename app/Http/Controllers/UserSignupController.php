<?php

namespace App\Http\Controllers;
use App\Models\users;

use Illuminate\Http\Request;

class UserSignupController extends Controller
{
    //
    function getData(Request $request){

        $validatedData = $request->validate([
            'user_name'=>'required',
            'password'=>'required',
           

        ]);

        users::create($validatedData);

        return redirect('/');
    }
}
