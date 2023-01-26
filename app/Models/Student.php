<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profile_image',
        'gender',
        'phone',
        'nationality',
        'date_of_birth',
        'grade_ten',
        'grade_twelve',
        'grade_bachelor',
        'grade_master',
        'contact_mode',
        'email',
    ];

}
