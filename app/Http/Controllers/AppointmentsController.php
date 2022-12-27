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

      public function store(Request $request){
      $patient=new Patient;
      $patient->department_id=$request->department_id;
      $patient->doctor_id=$request->doctor_id;
      $patient->patient_name=$request->patient_name;
      $patient->patient_date_of_birth=$request->patient_date_of_birth;
      $patient->patient_age=$request->patient_age;
      $patient->patient_phone=$request->patient_phone;
      $patient->patient_email=$request->patient_email;
      $patient->patient_gender=$request->patient_gender;
      $patient->patient_address=$request->patient_address;
      if($request->hasFile('patient_profile')){
        $file=$request->file('patient_profile');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('uploads/patient',$filename);
        $patient->patient_profile =$filename;
      }
       $patient->role_id=4;
       $patient->save();
       return redirect()->route('allpatients')->with('SuccessFull','Data Was Successfull Stored');
    }
}