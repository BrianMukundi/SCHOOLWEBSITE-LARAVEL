<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

use App\Models\applicants;

use Illuminate\Http\Request;

class applicantController extends Controller
{
    // function getapplicant(Request $request){

    //     $validatedData = $request->validate([
    //         'student_fname'=>'required',
    //         'student_mname'=>'required',
    //         'student_lname'=>'required',
    //         'student_email'=>'required',
    //         'student_tel'=>'required',
    //         'student_gender'=>'required',
    //         'student_dob'=>'required',
    //         'student_lname'=>'required',
           

    //     ]);

    //     applicants::create($validatedData);

    //     return redirect('/success');
    // }
}
