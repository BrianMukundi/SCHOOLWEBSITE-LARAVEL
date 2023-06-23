<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;


class CommentsController extends Controller
{
    //
    public function store(Request $request)
    { 
        $validatedData = $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'zipcode'=>'required | min:5' ,
            'country'=>'required',
            'subject'=>'required',

        ]);

        comments::create($validatedData);

        return ('thank you for your feedback!');
    }
}
