<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable=[
              'department_id',
              'name',
              'specialization',
              'age',
              'doctor_email',
              'doctor_details',
              'address',
              'gender',
              'phone',
              'experience',
              'date_of_birth',
              'doctor_profile',
              'role_id',
    ];
}