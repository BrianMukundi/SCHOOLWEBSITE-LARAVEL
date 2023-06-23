<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','user_id','user_name','password'
        // Add other fillable attributes here
    ];
}
