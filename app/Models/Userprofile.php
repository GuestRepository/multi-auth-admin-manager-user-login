<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userprofile extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'phone',
        'userimage',
        'higher_qualification',
        'qualification12th',
        'qualification10th',
        'country',
        'state',
        'city',
        'postoffice',
        'pin',
        'experience',
        'address',
    ];
    
}
