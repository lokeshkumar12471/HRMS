<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Appointment;
class AppointmentsController extends Controller
{
    public function addappointment(){
     return view('appointments.add_update_appointment');
    }
      public function allappointments(){
     return view('appointments.allappointments');
    }
      public function editappointment(){
     return view('appointments.editappointment');
    }
     public function index(){
        $data=array();
        $data['patient']=Patient::all();
        $data['doctor']=Doctor::all();
        $data['department']=Department::all();
        return view('appointments.add_update_appointment',$data);
    }
    public function create(){
        $data=array();
        $data['appointment']=Appointment::all();
        $data['doctor']=Doctor::all();
        $data['patient']=Patient::all();
        $data['department']=Department::all();
        return view('appointments.allappointments',$data);
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
      $patient->patient_problem=$request->patient_problem;
      if($request->hasFile('patient_profile')){
        $file=$request->file('patient_profile');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('uploads/patient',$filename);
        $patient->patient_profile =$filename;
      }
       $patient->role_id=4;
       $patient->save();
      $appointment=new Appointment;
      $appointment->department_id=$request->department_id;
      $appointment->doctor_id=$request->doctor_id;
      $appointment->appointment_name=$request->patient_name;
      $appointment->appointment_date_of_birth=$request->patient_date_of_birth;
      $appointment->appointment_date=$request->patient_appointment_date;
      $appointment->appointment_time_slot=$request->patient_time_slot;
      $appointment->appointment_age=$request->patient_age;
      $appointment->appointment_phone=$request->patient_phone;
      $appointment->appointment_email=$request->patient_email;
      $appointment->appointment_gender=$request->patient_gender;
      $appointment->appointment_address=$request->patient_address;
      $appointment->appointment_token_number=$request->patient_token_number;
      $appointment->appointment_problem=$request->patient_problem;
      $appointment->save();
       return redirect()->route('allappointments')->with('SuccessFull','Data Was Successfull Stored');
    }
     public function appointmentdetails($id){
        $data=array();
        $data['appointment']=Appointment::find($id);
        $data['doctor']=Doctor::find($data['appointment']->doctor_id);
        $data['patient']=Patient::find($data['appointment']->patient_id);

        $data['department']=Department::find($data['appointment']->department_id);
        return view('appointments.appointmentdetails',$data);
    }
}