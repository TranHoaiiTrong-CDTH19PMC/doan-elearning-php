<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\lophoc;
class MainController extends Controller
{
    public function trang_chu()
    {
        $user = Auth::user();
        if($user->account_type_id==1)  
        {
            
           $user = Auth::user();
           $ds=lophoc::where("giangvien_id","$user->id")->orderBy('id', 'desc')->get();
            return view("giao_vien/giao_vien_main",compact('ds'));
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
}
