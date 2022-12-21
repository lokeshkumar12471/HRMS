<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomAllotmentsController extends Controller
{
     public function addroomallotment(){
        return view('roomallotments.addroomallotment');
    }
    public function allrooms(){
        return view('roomallotments.allrooms');
    }
    public function editroomallotment(){
        return view('roomallotments.editroomallotment');
    }
        public function roomtype(){
        return view('roomallotments.roomtype');
    }
}