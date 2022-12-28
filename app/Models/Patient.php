<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

     protected $fillable=[
   'department_id',
     'doctor_id',
     'patient_name',
     'patient_date_of_birth',
     'patient_age',
     'patient_phone',
     'patient_email',
     'patient_gender',
     'patient_address',
     'patient_problem',
     'patient_profile',
    'role_id',
    ];
}