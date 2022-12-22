<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Department;


class DoctorsController extends Controller
{
    // public function adddoctor(){
    //     return view('doctors.adddoctor');
    // }
    //    public function alldoctors(){
    //     return view('doctors.alldoctors');
    // }
    //    public function doctordetails(){
    //     return view('doctors.doctordetails');
    // }
    //    public function editdoctor(){
    //     return view('doctors.editdoctor');
    // }
    public function index(){
        $data= array();
    $data['doctor']=Doctor::all();
     $data['department']=Department::all();
    return view('doctors.adddoctor',$data);
    }
      public function store(Request $request){
    $doctor= new Doctor;
    $doctor->doctor_name=$request->doctor_name;
    $doctor->department_id=$request->department_id;
    $doctor->specialization=$request->specialization;
    $doctor->doctor_age=$request->doctor_age;
    $doctor->doctor_email=$request->doctor_email;
    $doctor->doctor_details=$request->doctor_details;
    $doctor->doctor_address=$request->doctor_address;
    $doctor->doctor_gender=$request->doctor_gender;
     $doctor->doctor_phone=$request->doctor_phone;
      $doctor->doctor_experience=$request->doctor_experience;
     $doctor->doctor_date_of_birth=$request->doctor_date_of_birth;
     if($request->hasFile('doctor_profile')){
     $file=$request->file('doctor_profile');
     $extension=$file->getClientOriginalExtension();
     $filename=time().'.'.$extension;
     $file->move('uploads/doctor/' . $filename);
     $doctor->doctor_profile=$filename;
     }
       $doctor->role_id=2;
       $doctor->save();
    return view('doctors.alldoctors',compact('doctor'));
    }
    //  public function index(){
    // $doctor=Doctor::all();
    // return view('doctors.adddoctor',compact('doctor'));
    // }
}