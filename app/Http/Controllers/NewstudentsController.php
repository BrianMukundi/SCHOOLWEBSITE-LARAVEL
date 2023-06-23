<?php

namespace App\Http\Controllers;


use App\Models\newstudent;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Hash;


class NewstudentsController extends Controller
{





    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'student_fname' => 'required|string|max:255',
            'student_mname' => 'nullable|string|max:255',
            'student_lname' => 'required|string|max:255',
            'student_email' => 'required|email|max:255',
            'student_tel' => 'required|string|max:255',
            'student_gender' => 'required|string|max:255',
            'student_dob' => 'required|date',
            'application_level' => 'required|string|max:255',
            'guardian_name' => 'required|string|max:255',
            'guardian_tel' => 'required|string|max:255',
        ]);

        // Create a new student instance with the validated data
        $student = new newstudent;
        $student->student_fname = $validatedData['student_fname'];
        $student->student_mname = $validatedData['student_mname'];
        $student->student_lname = $validatedData['student_lname'];
        $student->student_email = $validatedData['student_email'];
        $student->student_tel = $validatedData['student_tel'];
        $student->student_gender = $validatedData['student_gender'];
        $student->student_dob = $validatedData['student_dob'];
        $student->application_level = $validatedData['application_level'];
        $student->guardian_name = $validatedData['guardian_name'];
        $student->guardian_tel = $validatedData['guardian_tel'];

        // Save the student record
        $student->save();

        // Redirect or return a response as needed
        return ('successStudent record created successfully!');
    }


   



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    

    
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function session( Request $request){
        $data=$request->input();
        $request->session()->put('mysession','WELCOME');
        return session('mysession');
    }
}
