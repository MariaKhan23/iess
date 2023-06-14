<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class campus extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'institute_id',
        'campus_name',
        'campus_address',
        'campus_phone',
        'campus_email',
        'campus_password',
        'campus_website',
        'campus_username',
    ];

    public function institute()
{
    return $this->belongsTo(Institute::class, 'institute_id');
}

}
