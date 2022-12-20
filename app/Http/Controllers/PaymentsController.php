<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
     public function addpayment(){
        return view('payments.addpayment');
    }
    public function allpayments(){
        return view('payments.allpayments');
    }
    public function paymentinvoice(){
        return view('payments.paymentinvoice');
    }
}