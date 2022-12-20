<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
     public function addpatient(){
        return view('patients.addpatient');
    }
     public function allpatients(){
        return view('patients.allpatients');
    }
     public function editpatient(){
        return view('patients.editpatient');
    }
     public function patientdetails(){
        return view('patients.patientdetails');
    }
}