<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function patient()
    {
        $data = array();
        $data['message'] = Message::all();
        $data['doctor'] = Doctor::all();
        if (session()->get('roleid') == '1') {
            $data['patient'] = DB::table('messages')->join('doctors', 'messages.doctor_id', 'doctors.id')->join('departments', '')
                ->select('doctors.*', 'messages.*')->get();
        }
        return view('messages.patientmessage', $data);
    }

    public function doctor()
    {
        $data = array();
        $data['patient'] = Patient::all();
        $data['message'] = Message::all();
        return view('messages.doctormessage', $data);
    }
    public function patientstore(Request $request)
    {
        $message = new Message;
        $message->sender->$request->sender;
        $message->save();
    }
}