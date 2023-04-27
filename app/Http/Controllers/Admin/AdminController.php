<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
// AQUA CNC SOLUTIONS
    public function login(Request $req){
        if($req->isMethod('post')){
            $data = $req->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
                return redirect('/admin/dashboard');
            }
        }else if(Auth::guard('admin')->check()){
            return view('admin.dashboard');

        }
        return view('admin.admin_login');
    }
    public function index(){
        return view('admin.dashboard');
    }
}
