<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientsController extends Controller
{
    public function index()
    {
        $data = array();
        $data['patient'] = Patient::all();
        $data['doctor'] = Doctor::all();
        $data['departments'] = Department::all();
        return view('patients.add_update_patient', $data);
    }
    public function create()
    {
          $data = array();
         if(session()->get('roleid')=='2')
{
    if(session()->get('emailid')!="")
    {
           $data['patient'] = DB::table('users')
           ->join('doctors', 'users.email', 'doctor_email')
            ->join('patients', 'patients.doctor_id', '=', 'doctors.id')
            ->join('departments', 'patients.department_id', '=', 'departments.id')
            ->select('patients.*', 'doctors.*', 'departments.*','users.*')
            ->get();
    }
}else{
        $data['patient'] = Patient::all();
        $data['Doctor'] = Doctor::all();
        $data['Department'] = Department::all();
        $data['patient'] = DB::table('patients')
            ->join('departments', 'patients.department_id', '=', 'departments.id')
            ->join('doctors', 'patients.doctor_id', '=', 'doctors.id')
            ->select('patients.*', 'doctors.doctor_name', 'departments.department_name')
            ->get();
    }
        return view('patients.allpatients', $data);
    }

    public function getpatientbydept(Request $request)
    {
        $deptid = $request->deptid;
        $data['Doctor'] = Doctor::where('department_id', $deptid)->get();
        return $data;
    }
    public function getpatientbyid(Request $request)
    {
        $editapp = $request->editapp;
        $data = array();
        $data['patient'] = Patient::find($editapp);
        $data['doctor'] = Doctor::find($data['patient']->doctor_id);
        $data['department'] = Department::find($data['patient']->department_id);
        $data['doctors'] = Doctor::all();
        $data['departments'] = Department::all();
        return $data;
    }
    public function patientdetails($id)
    {
        $data['patients'] = Patient::find($id);

        return view('patients.patientdetails', $data);
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $patient->department_id = $request->department_id;
        $patient->doctor_id = $request->doctor_id;
        $patient->patient_name = $request->patient_name;
        $patient->patient_date_of_birth = $request->patient_date_of_birth;
        $patient->patient_age = $request->patient_age;
        $patient->patient_phone = $request->patient_phone;
        $patient->patient_email = $request->patient_email;
        $patient->patient_gender = $request->patient_gender;
        $patient->patient_address = $request->patient_address;
        if ($request->hasFile('patient_profile')) {
            $file = $request->file('patient_profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/patient', $filename);
            $patient->patient_profile = $filename;
        }
        $patient->role_id = 1;
        $patient->update();
        $user = new User;
        $user->name = $request->patient_name;
        $user->email = $request->patient_email;
        $user->password = base64_encode($request->patient_password);
        $user->roleid = 1;
         $user->save();
        return redirect()->route('allpatients')->with('SuccessFull', 'Data Was Successfull Updated');
    }
    public function delete(Request $request)
    {
        $delete_id = $request->delete_id;
        $patient = Patient::find($delete_id);
        $patient->delete();
        $data = "success";
        return $data;
    }
}