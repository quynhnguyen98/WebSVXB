<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class AdminController extends Controller
{
    public function adminlogin(){
        return view('admin.login');
    }
    public function dashboard(){
        if(Session::get('tk')!='')
            return view('admin.index');
        else
            return $this->adminlogin();
            
    }
    public function login(Request $rq){
        $user=$rq->user;
        $password=md5($rq->password);
        $kq=DB::table('user')->where('taikhoan',$user)->where('matkhau',$password)->first();
        Session::put('tk',$kq);
        return $this->dashboard();
    }



    public function thanhvien()
    {
        return view('admin.thanhvien');
    }

}
