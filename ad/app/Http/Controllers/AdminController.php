<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }

    public function show(){
        return view('admin.dashboard');
    }

    public function dashboard(Request $REQUEST){
        $admin_email = $REQUEST->admin_email;
        $admin_password = md5($REQUEST->admin_password);
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();    
        return view('admin.dashboard');
    }

    public function trangchu(){
        return view('trangchu');
    }


    public function dangnhap(){
        return view('dangnhap');

     }

    public function dangky(){
        return view('dangky');

    }
    
   
}
