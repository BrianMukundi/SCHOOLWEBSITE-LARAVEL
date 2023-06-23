<?php

namespace App\Http\Controllers;

use App\Models\newstudent;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function show()
    {
    $data = newstudent::all(); // Retrieve all student records
    //   return view('new',['newstudents'=>$data]);

    return view('drekschools.studentlist', ['newstudents'=> $data]);
       
    }
}
