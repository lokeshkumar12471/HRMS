<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\UserManagement;
use Illuminate\Support\Facades\DB;

class UserManagementController extends Controller
{
    public function index()
    {
        $usermanagement['usermanagement'] = UserManagement::all();
        $usermanagement['usermanagement'] = Department::all();
        return view('usermanagement.addnewuser', $usermanagement);
    }
    public function create()
    {
        $usermanagement = array();
        $usermanagement['usermanagement'] = Department::all();
        $usermanagement['usermanagement'] = UserManagement::all();
        $usermanagement['usermanagement'] = DB::table('user_management')->join('departments', 'user_management.department_id', '=', 'departments.id')->select('user_management.*', 'department_name')->get();
        return view('usermanagement.allusers', $usermanagement);
    }
    public function store(Request $request)
    {
        $usermanagement = new UserManagement;
        $usermanagement->title = $request->title;
        $usermanagement->firstname = $request->firstname;
        $usermanagement->lastname = $request->lastname;
        $usermanagement->middlename = $request->middlename;
        $usermanagement->birthday = $request->birthday;
        $usermanagement->birth_place = $request->birth_place;
        $usermanagement->gender = $request->gender;
        $usermanagement->civil_status = $request->civil_status;
        $usermanagement->department_id = $request->department_id;
        $usermanagement->designation = $request->designation;
        $usermanagement->user_role = $request->user_role;
        $usermanagement->house_no = $request->house_no;
        $usermanagement->state = $request->state;
        $usermanagement->city = $request->city;
        $usermanagement->mobile_number = $request->mobile_number;
        $usermanagement->phone_number = $request->phone_number;
        $usermanagement->email_address = $request->email_address;
        $usermanagement->username = $request->username;
        $usermanagement->password = $request->password;
        $usermanagement->save();
        return redirect()->route('allusers')->with('success', 'Data was Successfully Added');
    }
    public function edit(Request $request)
    {
        $editusermanagement = $request->editusermanagement;
        $usermanagement = array();
        $usermanagement['usermanagement'] = UserManagement::find($editusermanagement);
        return $usermanagement;
    }
    public function delete(Request $request)
    {
        $deleteusermanagement = $request->deleteusermanagement;
        $usermanagement = UserManagement::find($deleteusermanagement);
        $usermanagement->delete();
        $usermanagement = "success";
        return $usermanagement;
    }
}