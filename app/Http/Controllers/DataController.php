<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = users::all(); // Assuming you have a "Data" model representing your database table

        return view('data.index', ['data' => $data]);
    }
}
