<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Department;


class DoctorsController extends Controller
{
    public function index()
    {
        $data = array();
        $data['doctor'] = Doctor::all();
        $data['department'] = Department::all();
        return view('doctors.add_update_doctor', $data);
    }
    public function create()
    {
        $data['department'] = Department::all();
        $data['doctor'] = Doctor::all();
        return view('doctors.alldoctors', $data);
    }
    public function store(Request $request)
    {
        $doctor = new Doctor;
        $doctor->doctor_name = $request->doctor_name;
        $doctor->department_id = $request->department_id;
        $doctor->specialization = $request->specialization;
        $doctor->doctor_age = $request->doctor_age;
        $doctor->doctor_email = $request->doctor_email;
        $doctor->doctor_details = $request->doctor_details;
        $doctor->doctor_address = $request->doctor_address;
        $doctor->doctor_gender = $request->doctor_gender;
        $doctor->doctor_phone = $request->doctor_phone;
        $doctor->doctor_experience = $request->doctor_experience;
        $doctor->doctor_date_of_birth = $request->doctor_date_of_birth;
        if ($request->hasFile('doctor_profile')) {
            $file = $request->file('doctor_profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/doctor', $filename);
            $doctor->doctor_profile = $filename;
        }
        $doctor->role_id = 2;
        $doctor->save();
        return redirect()->route('alldoctors')->with('Successfull', 'Data Successfully Updated');
    }
    public function edit($id)
    {
        $data = array();
        $data['department'] = Department::all();
        $data['doctor'] = Doctor::find($id);
        return view('doctors.add_update_doctor', $data);
    }
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->doctor_name = $request->doctor_name;
        $doctor->department_id = $request->department_id;
        $doctor->specialization = $request->specialization;
        $doctor->doctor_age = $request->doctor_age;
        $doctor->doctor_email = $request->doctor_email;
        $doctor->doctor_details = $request->doctor_details;
        $doctor->doctor_address = $request->doctor_address;
        $doctor->doctor_gender = $request->doctor_gender;
        $doctor->doctor_phone = $request->doctor_phone;
        $doctor->doctor_experience = $request->doctor_experience;
        $doctor->doctor_date_of_birth = $request->doctor_date_of_birth;
        if ($request->hasFile('doctor_profile')) {
            $file = $request->file('doctor_profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/doctor/', $filename);
            $doctor->doctor_profile = $filename;
        }
        $doctor->role_id = 2;
        $doctor->update();
        return redirect()->route('alldoctors')->with('Successfull', 'Data Successfully Updated');
    }
    public function delete($id)
    {

        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->route('alldoctors')->with('Successfull', 'Data Successfully Updated');
    }
}