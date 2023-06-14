<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CampusTimetable extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'institute_id',
        'campus_id',
        'class_name',
        'section_name',
        'subject_name',
        'monday',
        'tuesday',
        'thursday',
        'friday',
        'saturday',
        'start_time',
        'end_time',
        'teacher',

    ];  
}
