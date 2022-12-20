<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function addappointment(){
     return view('appointments.addappointment');
    }
      public function allappointments(){
     return view('appointments.allappointments');
    }
      public function appointmentdetails(){
     return view('appointments.appointmentdetails');
    }
      public function editappointment(){
     return view('appointments.editappointment');
    }
}