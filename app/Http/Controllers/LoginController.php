<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
      public function index(){
        return view('otherpages.login');
    }

    public function checkLogin(Request $request){
        $email = $request->user;
        $password = base64_encode($request->pass);
        $result = DB::select("select * from users where email='$email'and password='$password'");
        session(['userid'=>$result[0]->id]);
        session(['roleid'=>$result[0]->role]);
        if(session()->get('roleid') == '3')
        {
            return redirect('/dashboard');
        }
        elseif(session()->get('roleid') == '2')
        {
           return redirect('/dashboard');

        }
        else
        {
             return redirect('/dashboard');
        }
    }
    public function logout()
    {
        session(['userid'=>""]);
        session(['roleid'=>""]);
         return redirect()->route('login')->with('success', 'Logout successfully');
    }
}