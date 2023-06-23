<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newstudent extends Model
{
    use HasFactory;

   

     protected $fillable = [
        'studentfname',
        'studentmname',
        'studentlname',
        'student_email',
        'student_tel',
        'student_gender',
        'student_dob',
        'application_level',
        'guardian_name',
        'guardian_tel',
    ];

    
}
