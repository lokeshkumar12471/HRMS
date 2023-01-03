<?php

namespace App\Http\Controllers;

use App\Models\Department;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        $department = Department::all();
        return view('departments.alldepartments', compact('department'));
    }
    public function create()
    {
        $department = Department::all();
        return view('departments.add_update_department', compact('department'));
    }

    public function store(Request $request)
    {
        $department  = new Department;
        $department->department_name  = $request->department_name;
        $department->save();
        return redirect()->route('alldepartments')->with('Successfull', 'Data Successfully Stored');
    }
    public function edit($id)
    {
        $department = Department::find($id);
        return view('departments.add_update_department', compact('department'));
    }
    public function update(Request $request, $id)
    {
        $department = Department::find($id);
        $department->department_name = $request->department_name;
        $department->update();
        return redirect()->route('alldepartments')->with('Successfull', 'Data Successfully Updated');
    }
    public function delete($id)
    {
        $department = Department::find($id);
        $department->delete();
        return redirect()->route('alldepartments')->with('Successfull', 'Data Successfully Updated');
    }
}