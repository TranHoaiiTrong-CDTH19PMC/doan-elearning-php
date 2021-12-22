<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\lophoc_sinhvien;
use App\Models\account;
use App\Models\lophoc;

class SinhVienController extends Controller
{
   
    public function DS_Lophoccuasinhvien()
    {
        $user = Auth::user();
        $ds= $user->danhSachLopHocCuaSinhVien;
        return view("sinh_vien/sinh_vien_main",compact("ds"));
    }
    public function tham_gia_lop_hoc()
    {
        return view("sinh_vien/tham_gia_lop_hoc");
    }
    public function huy_lop_hoc($id)
    {
        $user = Auth::user();
        $ds=lophoc_sinhvien::where([
            ["sinhvien_id","$user->id"],
            ["lophoc_id","$id"]
        ]);
        $ds->delete();
        return redirect()->route("trangchu");
    }
   public function xl_tham_gia_lop_hoc(Request $a)
    {
       
        $user = Auth::user();
       
        $cc=lophoc::where("mavaolop","$a->malophoc")->first();

       
        $kt=lophoc_sinhvien::where([["lophoc_id","$cc->id"],["sinhvien_id","$user->id"]])->count();
        if($kt>0)
        {
            return "Lớp này đã vào rồi muốn bị đuổi không";
        }
        $add=new lophoc_sinhvien();
        $add->sinhvien_id=$user->id;
        $add->lophoc_id=$cc->id;
        $add->cho_hay_khong=0;
        $add->save();
        return redirect()->route("trangchu");
    }
}
