<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\account;
use App\Models\lophoc;
use App\Models\lophoc_sinhvien;
use App\Http\Requests\DangNhapRequest;

class AccountController extends Controller
{
  
    public function dang_nhap()
    {
        return view("elearning/dang_nhap");
    }
    public function xl_dang_nhap(DangNhapRequest $a)
    {
        if (Auth::attempt(['email' => $a->email, 'password' =>$a->password])) {
           
           $user = Auth::user();
          
            if($user->account_type_id==1)  
            {
                $ds=lophoc::where("giangvien_id","$user->id")->orderBy('id', 'desc')->get();
                return view("giao_vien/giao_vien_main",compact("ds"));
            }
            if($user->account_type_id==2)  
            {
                $ds= $user->danhSachLopHocCuaSinhVien;
                return view("sinh_vien/sinh_vien_main",compact("ds"));
            }
            if($user->account_type_id==3)  
            {
                return view("admin/admin_main");
            }
            }
            else{
              
                return Redirect()->route("dang_nhap")->with('error','Đăng nhập thất bại');   
            }
    }
    public function dangxuat()
    {
        Auth::logout();
        return Redirect()->route("dang_nhap");
    }
    public function quen_mat_khau()
    {
        return view("elearning/quen_mat_khau");
    }
}
