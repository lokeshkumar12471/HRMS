<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomAllotment extends Model
{
    use HasFactory;
    protected $fillable = [
        'roomnumber',
        'roomtype',
        'roomfloor',
        'roomrate',
        'patientname',
        'allotmentdate',
        'dischargedate',
        'doctor_id',
        'totalbeds',
        'occupiedbeds',
        'unoccupiedbeds',
    ];
}