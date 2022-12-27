<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Department;

class PatientsController extends Controller
{
      public function index(){
        $data=array();
        $data['patient']=Patient::all();
        $data['doctor']=Doctor::all();
        $data['department']=Department::all();
        return view('patients.add_update_patient',$data);
    }
     public function create(){
        $data=array();
        $data['patient']=Patient::all();
        $data['Doctor']=Doctor::all();
        $data['Department']=Department::all();
        return view('patients.allpatients',$data);
    }
     public function getpatientbydept(Request $request){
$deptid = $request->deptid;
 $data['Doctor']=Doctor::where('department_id', $deptid)->get();
 return $data;
    }
     public function edit($id){

        $data=array();
        $data['patient']=Patient::find($id);
        $data['doctor']=Doctor::find($data['patient']->doctor_id);
        $data['department']=Department::find($data['patient']->department_id);
         $data['doctors']=Doctor::all();
         $data['departments']=Department::all();

        return view('patients.add_update_patient',$data);
    }
    public function patientdetails($id){
        $data['patients']=Patient::find($id);

     return view('patients.patientdetails',$data);
    }

     public function update(Request $request,$id){
   $patient=Patient::find($id);
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
       $patient->update();
       return redirect()->route('allpatients')->with('SuccessFull','Data Was Successfull Updated');

    }
     public function delete($id){
     $patient=Patient::find($id);
     $patient->delete();
     return redirect()->route('allpatients')->with('SuccessFull','Data Was Successfull Deleted');

    }
    }