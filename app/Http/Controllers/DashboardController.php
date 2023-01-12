<?php

namespace App\Http\Controllers;
use App\Models\Doctor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
public function index(){
$data=array();
if(session()->get('roleid')=='2')
{
    if(session()->get('emailid')!="")
    {
$data['doctor']= DB::table('users')->join('doctors', 'users.email', 'doctor_email')
            ->select('users.*', 'doctors.*')
            ->where('users.email',session()->get('emailid'))
            ->get();
    }
}else{
    if(session()->get('roleid')=='1'){
       if(session()->get('emailid')!="") {
$data['patients']= DB::table('users')->join('patients', 'users.email', 'patient_email')
            ->select('users.*', 'patients.*')
            ->where('users.email',session()->get('emailid'))
            ->get();
       }
    }
}
return view('dashboard',$data);
}
}