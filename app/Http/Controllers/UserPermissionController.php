<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\UserPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserPermissionController extends Controller
{
    public function index()
    {
        $permission = array();
        $permission['permission'] = UserPermission::all();
        $permission['permission'] = Role::all();
        return view('permission.addpermission', $permission);
    }
    public function store(Request $request)
    {
        $permission = new UserPermission;
        $permission->permissionname = $request->permissionname;
        $permission->role_id = $request->role_id;
        $permission->save();
        return redirect()->route('alluserpermission')->with('success', 'Data was Successfully Added');
    }
    public function create()
    {
        $permission = array();
        $permission['permission'] = UserPermission::all();
        $permission['permission'] = DB::table('user_permissions')->join('roles', 'user_permissions.role_id', '=', 'roles.id')->select('user_permissions.*', 'roles.name')->get();
        return view('permission.alluserpermission', $permission);
    }
    public function edit(Request $request)
    {
        $edituserpermission = $request->edituserpermission;
        $permission['permission'] = UserPermission::find($edituserpermission);
        return $permission;
    }
    public function delete(Request $request)
    {
        $deleteuserpermission = $request->deleteuserpermission;
        $permission = UserPermission::find($deleteuserpermission);
        $permission->delete();
        $permission = "success";
        return $permission;
    }
}