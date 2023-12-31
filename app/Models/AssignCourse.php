<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'date',
        'time',
        'time_type',
        'available_seat',
    ];
}
