<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institute extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'institute_name',
        'Institute_address',
        'institute_email',
        'institute_password',
        'institute_city',
        'institute_contact',
        'institute_ptcl',
    ];

    public function campuses()
    {
        return $this->hasMany(Campus::class);
    }

  
}
