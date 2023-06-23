<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\drekschoolsController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\UserSignupController;
use App\Http\Controllers\NewstudentsController;
use App\Http\Controllers\StudentController;
use Illuminate\Contracts\Session\Session;

// use App\Http\Controllers\PhotosController;
// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;
// use App\Http\Controllers\ResetPasswordController;
// use App\Http\Controllers\FormController;
// use App\Http\Controllers\StudentController;
// use App\Http\Controllers\UserManagementController;
// use App\Http\Controllers\LockScreen;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function(){
    return view('drekschools.index');
});
Route::get('/about', function(){
    return view('drekschools.aboutdrek');
});

Route::get('/Admission', function () {
    return view('drekschools.Admission');
    
});
Route::get('/drek102', function(){
    return view('drekschools.drek102');
});
Route::get('/Library', function(){
    return view('drekschools.Library');
    
});
Route::get('/News', function(){
    return view('drekschools.News');
});
Route::get('/contacts', function(){
    return view('drekschools.contacts');
});
Route::get('/login', function(){
    return view('drekschools.studentpanel.login');
});

// Route::get('/admin', function(){
//     return view('drekschools.admin');
// });

Route::get('/admin', function(){
    return view('drekschools.adminpanel.admin');
});



Route::get('/student', function(){
    return view('drekschools.studentpanel.student');
});
Route::get('/login', function(){
    return view('drekschools.studentpanel.login');
});

Route::get('/signup', function(){
    return view('drekschools.studentpanel.signup');
});

Route::get('/fee', function(){
    return view('drekschools.studentpanel.fee');
});

Route::get('/mpesa', function(){
    return view('drekschools.studentpanel.mpesa');
});


Route::get('/applicationtest', function(){
    return view('drekschools.studentpanel.applicationtest');
});
Route::get('/d', function(){
    return view('drekschools.studentpanel.d');
});
Route::get('/timetable', function(){
    return view('drekschools.studentpanel.timetable');
});

Route::get('/exam', function(){
    return view('drekschools.studentpanel.exam');
});

Route::get('/password', function(){
    return view('drekschools.studentpanel.password');
});

Route::get('/logout', function(){
   session()->forget('user');
    return redirect('/');
});



// for mpesa stk

Route::post('/pay',[PayController::class,'stk']);





Route::post("comment",[CommentsController::class,'store']);

Route::post("users",[UserSignupController::class,'getData']);

Route::post("adminlogin",[AdminLoginController::class,'admin']);

Route::post("login",[UserLoginController::class,'login']);

Route::post("applicants",[NewstudentsController::class,'store']);



Route::get('drekschools.studentlist',[StudentController::class,'show']);














