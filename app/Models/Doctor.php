<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_id',
        'doctor_name',
        'specialization',
        'doctor_age',
        'doctor_email',
        'doctor_details',
        'doctor_address',
        'doctor_gender',
        'doctor_phone',
        'doctor_experience',
        'doctor_date_of_birth',
        'doctor_profile',
        'role_id',
    ];
}