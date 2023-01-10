<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Pharmacy;
use Illuminate\Support\Facades\DB;
class PharmacyController extends Controller
{
    public function addpharmacy(){
        $pharmacy['pharmacy']=Department::all();
        return view('pharmacy.addpharmacy',$pharmacy);
    }

       public function pharmacydetails(){
        return view('pharmacy.pharmacydetails');
    }
       public function editpharmacy(Request $request){
         $editpharmacy=$request->editpharmacy;
        $pharmacy['pharmacy']=Pharmacy::find($editpharmacy);
        return $pharmacy;
    }
    public function store(Request $request){
        $pharmacy=new Pharmacy;
        $pharmacy->tablet=$request->tablet;
        $pharmacy->drug=$request->drug;
        $pharmacy->department_id=$request->department_id;
        $pharmacy->expirydate=$request->expirydate;
        $pharmacy->inventoryname=$request->inventoryname;
        $pharmacy->price=$request->price;
        $pharmacy->save();
        return redirect()->route('allpharmacies')->with('success','Data Was Successfully Stored');
    }
    public function create(){
        $pharmacy['pharmacy']=Pharmacy::all();
        $pharmacy['pharmacy']=DB::table('pharmacies')->join('departments','pharmacies.department_id','=','departments.id')
        ->select('pharmacies.*','departments.department_name')
        ->get();
        return view('pharmacy.allpharmacies',$pharmacy);
    }
    public function delete(Request $request){
        $deletepharmacy=$request->deletepharmacy;
        $pharmacy=pharmacy::find($deletepharmacy);
        $pharmacy->delete();
        $pharmacy="success";
        return $pharmacy;

    }
}