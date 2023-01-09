<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserManagement extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_id',
        'title',
        'firstname',
        'lastname',
        'middlename',
        'birthday',
        'birth_place',
        'gender',
        'civil_status',
        'designation',
        'user_role',
        'house_no',
        'state',
        'city',
        'mobile_number',
        'phone_number',
        'email_address',
        'username',
        'password',
    ];
}