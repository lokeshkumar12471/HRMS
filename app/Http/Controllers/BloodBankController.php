<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodBank;

class BloodBankController extends Controller
{
    public function addbloodbank(){
        return view('bloodbank.addbloodbank');
    }
       public function bloodbankdetails(){
        return view('bloodbank.bloodbankdetails');
    }
       public function editbloodbank(){
        return view('bloodbank.editbloodbank');
    }

    public function store(Request $request){
     $bloodbank=new BloodBank;
     $bloodbank->bloodgroup=$request->bloodgroup;
     $bloodbank->bloodquantity=$request->bloodquantity;
     $bloodbank->save();
     return redirect()->route('allbloodbanks')->with('success','successfully Data was Inserted');
    }
    public function create(){
        $bloodbank['bloodbank']=BloodBank::all();
        return view('bloodbank.allbloodbanks',$bloodbank);
    }

    public function edit(Request $request){
       $edit_id=$request->edit_id;
       $data['bloodbank']=BloodBank::find($edit_id);
       return $data;
    }

    public function delete(Request $request){
       $delete_id=$request->delete_id;
        $bloodbank=BloodBank::find($delete_id);
        if($bloodbank !="null"){
        $bloodbank->delete();
        $data="success";
         }
         return $data;

    }
}