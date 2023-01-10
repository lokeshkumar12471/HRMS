<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
      public function index(){
        return view('otherpages.invoice');
    }
      public function signup(){
        return view('otherpages.signup');
    }

}