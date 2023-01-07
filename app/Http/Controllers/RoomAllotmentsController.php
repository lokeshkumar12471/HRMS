<?php

namespace App\Http\Controllers;

use App\Models\RoomAllotment;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class RoomAllotmentsController extends Controller
{
    public function addroomallotment()
    {
        $roomallotment['roomallotment'] = Doctor::all();
        return view('roomallotments.addroomallotment', $roomallotment);
    }
    public function create()
    {
        $roomallotment = array();
        $roomallotment['roomallotment'] = RoomAllotment::all();
        $roomallotment['roomallotment'] = DB::table('room_allotments')
            ->join('doctors', 'room_allotments.doctor_id', '=', 'doctors.id')
            ->select('room_allotments.*', 'doctors.doctor_name')
            ->get();
        return view('roomallotments.allrooms', $roomallotment);
    }
    public function editroomallotment(Request $request)
    {
        $edit_id = $request->edit_id;
        $roomallotment['roomallotment'] = RoomAllotment::find($edit_id);
        return $roomallotment;
    }
    public function deleteroomallotment(Request $request)
    {
        $delete_id = $request->delete_id;
        $roomallotment = RoomAllotment::find($delete_id);
        $roomallotment->delete();
        $data="success";
        return $data;
    }
    public function roomtype()
    {
        return view('roomallotments.roomtype');
    }

    public function store(Request $request)
    {
        $roomallotment = new RoomAllotment;
        $roomallotment->roomnumber = $request->roomnumber;
        $roomallotment->roomtype = $request->roomtype;
        $roomallotment->roomfloor = $request->roomfloor;
        $roomallotment->roomrate = $request->roomrate;
        $roomallotment->patientname = $request->patientname;
        $roomallotment->allotmentdate = $request->allotmentdate;
        $roomallotment->dischargedate = $request->dischargedate;
        $roomallotment->doctor_id = $request->doctor_id;
        $roomallotment->totalbeds = $request->totalbeds;
        $roomallotment->occupiedbeds = $request->occupiedbeds;
        $roomallotment->unoccupiedbeds = $request->unoccupiedbeds;
        $roomallotment->save();
        return redirect()->route('allrooms')->with('success', 'Data Was Successfully Stored');
    }
    public function getroomallotmentid(Request $request)
    {
        $viewroomallotment=$request->viewroomallotment;
        $roomallotment['roomallotment']=RoomAllotment::find($viewroomallotment);
        return $roomallotment;
    }
}