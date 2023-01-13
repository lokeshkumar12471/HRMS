<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\User;

use App\Models\Appointment;
use Illuminate\Support\Facades\DB;

class AppointmentsController extends Controller
{

    public function index()
    {
        $data = array();
        $data['patient'] = Patient::all();
        $data['doctor'] = Doctor::all();
        $data['department'] = Department::all();
        return view('appointments.add_update_appointment', $data);
    }
    public function create()
    {
        $data = array();
        if (session()->get('roleid') == '2') {
            if (session()->get('emailid') != "") {
                $data['appointment'] = DB::table('users')
                    ->join('doctors', 'users.email', 'doctor_email')
                    ->join('appointments', 'appointments.doctor_id', '=', 'doctors.id')
                    ->join('departments', 'appointments.department_id', '=', 'departments.id')
                    ->select('appointments.*', 'doctors.*', 'departments.*', 'users.*')
                    ->get();
            }
        }
        if (session()->get('roleid') == '1' || session()->get('roleid') == '2') {
            if (session()->get('emailid') != "") {
                $data['appointment'] = DB::table('users')
                    ->join('patients', 'users.email', 'patient_email')
                    ->join('departments', 'patients.department_id', '=', 'departments.id')
                    ->join('appointments', 'appointments.appointment_name', '=', 'patients.patient_name')
                    ->join('doctors', 'patients.doctor_id', '=', 'doctors.id')
                    ->select('patients.*', 'doctors.*', 'departments.*', 'users.*', 'appointments.*')
                    ->get();
            }
        } else {
            $data['appointment'] = Appointment::all();
            $data['doctor'] = Doctor::all();
            $data['patient'] = Patient::all();
            $data['department'] = Department::all();
            $data['appointment'] = DB::table('appointments')
                ->join('departments', 'appointments.department_id', '=', 'departments.id')
                ->join('doctors', 'appointments.doctor_id', '=', 'doctors.id')
                ->select('appointments.*', 'doctors.doctor_name', 'departments.department_name')
                ->get();
        }
        return view('appointments.allappointments', $data);
    }
    public function store(Request $request)
    {
        $patient = new Patient;
        $patient->department_id = $request->department_id;
        $patient->doctor_id = $request->doctor_id;
        $patient->patient_name = $request->patient_name;
        $patient->patient_date_of_birth = $request->patient_date_of_birth;
        $patient->patient_age = $request->patient_age;
        $patient->patient_phone = $request->patient_phone;
        $patient->patient_email = $request->patient_email;
        $patient->patient_gender = $request->patient_gender;
        $patient->patient_address = $request->patient_address;
        $patient->patient_problem = $request->patient_problem;

        if ($request->hasFile('patient_profile')) {
            $file = $request->file('patient_profile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/patient', $filename);
            $patient->patient_profile = $filename;
        } else {
            $patient->patient_profile = "sample.jpg";
        }
        $patient->role_id = 1;
        $patient->save();
        $appointment = new Appointment;
        $appointment->department_id = $request->department_id;
        $appointment->doctor_id = $request->doctor_id;
        $appointment->appointment_name = $request->patient_name;
        $appointment->appointment_date_of_birth = $request->patient_date_of_birth;
        $appointment->appointment_date = $request->patient_appointment_date;
        $appointment->appointment_time_slot = $request->patient_time_slot;
        $appointment->appointment_age = $request->patient_age;
        $appointment->appointment_phone = $request->patient_phone;
        $appointment->appointment_email = $request->patient_email;
        $appointment->appointment_gender = $request->patient_gender;
        $appointment->appointment_address = $request->patient_address;
        $appointment->appointment_token_number = $request->patient_token_number;
        $appointment->appointment_problem = $request->patient_problem;

        $appointment->save();
        $user = new User;
        $user->name = $request->patient_name;
        $user->email = $request->patient_email;
        $user->password = base64_encode($request->patient_password);
        $user->roleid = 1;
        $user->save();
        return redirect()->route('allappointments')->with('SuccessFull', 'Data Was Successfull Stored');
    }

    public function getappointmentbyid(Request $request)
    {
        $appid = $request->appid;
        $data = array();
        $data['appointment'] = Appointment::find($appid);
        $data['doctor'] = Doctor::find($data['appointment']->doctor_id);
        $data['patient'] = Patient::find($data['appointment']->patient_id);
        $data['department'] = Department::find($data['appointment']->department_id);
        return $data;
    }
}