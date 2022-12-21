<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodBankController extends Controller
{
    public function addbloodbank(){
        return view('bloodbank.addbloodbank');
    }
       public function allbloodbanks(){
        return view('bloodbank.allbloodbanks');
    }
       public function bloodbankdetails(){
        return view('bloodbank.bloodbankdetails');
    }
       public function editbloodbank(){
        return view('bloodbank.editbloodbank');
    }
}