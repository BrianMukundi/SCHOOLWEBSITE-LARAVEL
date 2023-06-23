<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class commentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
       {
        
        DB::table('admins')->insert([
            'user_name'=>'Admin',
            'password'=>'Admin',
           
        ])
        ;}

    }
