<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function adddoctor(){
        return view('doctors.adddoctor');
    }
       public function alldoctors(){
        return view('doctors.alldoctors');
    }
       public function doctordetails(){
        return view('doctors.doctordetails');
    }
       public function editdoctor(){
        return view('doctors.editdoctor');
    }
}