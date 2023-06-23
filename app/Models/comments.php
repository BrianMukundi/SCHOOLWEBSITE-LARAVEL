<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    // protected $fillable = ['fname','lname',];
    // protected $guarded = [];
    protected $fillable = [
        'fname','lname','zipcode','country','subject'
        // Add other fillable attributes here
    ];
}
