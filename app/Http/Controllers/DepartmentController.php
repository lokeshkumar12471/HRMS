<?php

namespace App\Http\Controllers;
use App\Models\Department;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //Frontend Controller
    public function adddepartment(){
        return view('departments.adddepartment');
    }
     public function alldepartments(){
        return view('departments.alldepartments');
    }
     public function departmentdetails(){
        return view('departments.departmentdetails');
    }
     public function editdepartment(){
        return view('departments.editdepartment');
    }

    //BackendController
     public function index(){
        $department=Department::orderBy('id','asc')->paginate(10);
        return view('pages.backend.departments.index',compact('department'));
    }
     public function show(){
        $department=Department::orderBy('id','asc')->paginate(10);
        return view('pages.backend.departments.create',compact('department'));
    }
      public function store(Request $request){
       $department=new Department;
       $department->department_name=$request->department_name;
       $department->save();
       return redirect()->route('index')->with('Successfull','Data Successfully Stored');
    }
       public function edit($id){
      $department=Department::find($id);
      return view('pages.backend.departments.edit',compact('department'));
    }
     public function update(Request $request,$id){
       $department=Department::find($id);
       $department->department_name=$request->department_name;
         $department->update();
           return redirect()->route('index')->with('Successfull','Data Successfully Updated');
    }
      public function delete($id){
       $department=Department::find($id);
       $department->delete();
    return redirect()->route('index')->with('Successfull','Data Successfully Updated');

    }
}