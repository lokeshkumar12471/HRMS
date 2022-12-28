<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

protected $fillable=[
     'department_id',
      'doctor_id',
      'appointment_name',
      'appointment_date_of_birth',
      'appointment_appointment_date',
      'appointment_time_slot',
      'appointment_age',
      'appointment_phone',
      'appointment_email',
      'appointment_gender',
      'appointment_address',
      'appointment_token_number',
      'appointment_problem',
];
}