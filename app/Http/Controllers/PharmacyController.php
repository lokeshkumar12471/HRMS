<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    public function addpharmacy(){
        return view('pharmacy.addpharmacy');
    }
       public function allpharmacies(){
        return view('pharmacy.allpharmacies');
    }
       public function pharmacydetails(){
        return view('pharmacy.pharmacydetails');
    }
       public function editpharmacy(){
        return view('pharmacy.editpharmacy');
    }
}