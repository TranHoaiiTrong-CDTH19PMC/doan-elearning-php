<?php

namespace App\Http\Controllers;
use App\Models\account;
use App\Models\lophoc;
use App\Models\lophoc_sinhvien;
use Illuminate\Http\Request;
use App\Http\Requests\GiaoVienRequest;
use App\Http\Requests\themlophocRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ktEmailRequest;

class GiangVienController extends Controller
{

    public function guimail()
    {
        $data=[
            "name"=>"quang vinh",
        ];
        Mail::send('elearning/email',$data,function($mes){
            $mes->from("dangquangvinh20188@gmail.com","quang vin gửi 1");
            $mes->to("0306191292@caothang.edu.vn","hihi");
            $mes->subject("Thư gửi mẫu");
        });
    }

    public function kiemtra()
    {
        $user = Auth::user();
        if($user->account_type_id==1)  
        {
            return true;
        }
        else{
            return redirect()->route("trangchu");
        }
    }

    public function ds_lop()
    {
        $user = Auth::user();
        $ds=lophoc::where("giangvien_id","$user->id")->orderBy('id', 'desc')->get();
        return view("giao_vien.giao_vien_main",compact('ds'));
    }

    public function doi_thong_tin()
    {
        $user = Auth::user();
        return view('giao_vien/doi_thong_tin_giao_vien',compact('user'));
    }
    public function xl_doi_thong_tin(GiaoVienRequest $a)
    {
        $user=account::find($a->id);
        $user->name=$a->name;
        $user->username=$a->username;
        $user->email=$a->email;
        $user->avatar=$a->avatar;
        $user->save();
        return view('giao_vien/doi_thong_tin_giao_vien',compact('user'))->with('error','Cập nhật thông tin thành công');   
    }

    public function them_lop_hoc()
    {
        $user = Auth::user();
        if($user->account_type_id==1)  
        {
            return view('giao_vien/them_lop_hoc');
        }
        else{
            return redirect()->route("trangchu");
        }
       
    }
    public function xl_them_lop_hoc(themlophocRequest $a)
    {
        $user = Auth::user();
        $lop=new lophoc;
        $lop->giangvien_id=$user->id;
        $lop->tenlop=$a->name;
       $code= rand(10000,99999);
       do{
        $lop->mavaolop=$code;
       $kt= lophoc::where("mavaolop","$code")->count();
       $code= rand(10000,99999 );
       }
       while($kt>0);
    
        $lop->tieude=$a->tieu_de;
        if($a->hinh_nen==null)
        {
            $lop->hinh_nen="a4.jpg";
        }
        else{
            $image=$a->file('hinh_nen');
            $duoi=$a->file('hinh_nen')->extension();
            $file_name=time().'.'.$duoi;
            $path = $image->storeAs('images',$file_name);
            $lop->hinh_nen=$file_name;
        }
        $lop->save();
        return redirect()->route("ds_lop");
    }

    public function sua_lop_hoc($id)
    {
            $user=lophoc::find($id);
            return view("giao_vien/sua_lop_hoc",compact('user'));
    }
    public function xl_sua_lop_hoc(themlophocRequest $a, $id)
    {
        $user=lophoc::find($id);
        if($a->hasFile('hinh_nen'))
        {
            $image=$a->file('hinh_nen');
            $duoi=$a->file('hinh_nen')->extension();
            $file_name=time().'.'.$duoi;
            $path = $image->storeAs('images',$file_name);
            $user->hinh_nen=$file_name;
            $user->tenlop=$a->name;
            $user->mavaolop=$a->ma_vao_lop;
            $user->tieude=$a->tieu_de;
            $user->save();
        }else{
        $user->tenlop=$a->name;
        $user->mavaolop=$a->ma_vao_lop;
        $user->tieude=$a->tieu_de;
        $user->save();
        }
        return redirect()->route("ds_lop")->with('error','Sửa lớp học thành công'); 
    }
    
    public function xl_xoa_lop_hoc( $id)
    {
        $user=lophoc::find($id);
        $user->delete();
        return redirect()->route("ds_lop")->with('error','Xoá lớp học thành công'); 
    }

    public function doi_mat_khau()
    {
        return view("elearning/doi_mat_khau");
    }

    public function xl_doi_mat_khau(Request $a)
    {
        $user = Auth::user();
     
        if(empty($user))
        {
            $ds="Không có tài khoản tồn tại";
           return view('doi_mat_khau',compact('ds'));
        }elseif(Hash::check($a->pw1,$user->password)){
            if($a->pw3==$a->pw2)
            {
                $user->password=Hash::make("$a->pw3");
                $user->save();
                Auth::logout();
                 return Redirect()->route("dang_nhap")->with('error','Đổi mật khẩu thành công mời bạn đăng nhập lại');   
            }
            else{
               return Redirect()->route("doi_mat_khau")->with('xacnhan','Mật khẩu không trùng khớp');   
            }
        }
        else{
            return Redirect()->route("doi_mat_khau")->with('matkhaucusai','Mật khẩu cũ bạn nhập sai');
        }
    }
    public function Duyet_danh_Sach_cho($a)
    {
      //  $ds=lophoc_sinhvien::where([["lophoc_id","$a"],["cho_hay_khong",0]])->get();
        $cc=lophoc::where("id","$a")->first();
      //  dd($lop);
        $ds=$cc->danhSachSinhVien;
        //dd($ds);
        return view("giao_vien/danh_sach_cho",compact("ds"));
    }

    public function xl_Duyet_danh_Sach_cho($sinhvien_id,$lophoc_id)
    {
        $lop=lophoc_sinhvien::where([["lophoc_id","$lophoc_id"],["sinhvien_id","$sinhvien_id"]])->first();
        $lop->cho_hay_khong=1;
        $lop->save();
        return redirect()->route('Duyet_danh_Sach_cho',['id'=>$lophoc_id]);
    }
    public function Xoa_sinh_vien_trong_danh_sach_cho($sinhvien_id,$lophoc_id)
    {
        $lop=lophoc_sinhvien::where([["lophoc_id","$lophoc_id"],["sinhvien_id","$sinhvien_id"]])->first();
        $lop->delete();
        return redirect()->route('Duyet_danh_Sach_cho',['id'=>$lophoc_id]);
    }

    public function Kich_sinh_vien_ra_khoi_lop($a)
    {
      //  $ds=lophoc_sinhvien::where([["lophoc_id","$a"],["cho_hay_khong",0]])->get();
        $cc=lophoc::where("id","$a")->first();
      //  dd($lop);
        $ds=$cc->danhSachSinhVien;
        //dd($ds);
        return view("giao_vien/Danh_Sach_sinh_vien_trong_lop",compact("ds"));
    }

    public function xl_Kich_sinh_vien_ra_khoi_lop($sinhvien_id,$lophoc_id)
    {
        $lop=lophoc_sinhvien::where([["lophoc_id","$lophoc_id"],["sinhvien_id","$sinhvien_id"]])->first();
        $lop->cho_hay_khong=0;
        $lop->save();
        return redirect()->route('Kich_sinh_vien_ra_khoi_lop',['id'=>$lophoc_id]);
    }
    
    public function them_sinh_vien_vao_lop($id)
    {
        $ds=lophoc::find($id);
        return view("giao_vien/them_sinh_vien",compact("ds"));
    }
    public function xl_them_sinh_vien_vao_lop(ktEmailRequest $a, $id)
    {
       
        $sinhvien=account::where("email","$a->email")->first();
    //    $kt=lophoc_sinhvien::where([['sinhvien_id',"$sinhvien->id"],
    //    ['lophoc_id',"$id"]])->count();
    //    if($kt>0)
    //    {
    //        return "sinh viên này đã có trong lớp";
    //    }
        if(empty($sinhvien))
        {
            return "Không có sinh viên này";
        }elseif($sinhvien->account_type_id==1){
            return "Đây là giáo viên bạn không thêm vào được";
        }
        elseif($sinhvien->account_type_id==3)
        {
            return "Đây là Admin bạn không cho vô được";
        }
       $add=new lophoc_sinhvien;
       $add->lophoc_id=$id;
       $add->sinhvien_id=$sinhvien->id;
       $add->cho_hay_khong=1;
       $add->save();
       $cc=lophoc::where("id","$id")->first();
         $ds=$cc->danhSachSinhVien;
         return view("giao_vien/Danh_Sach_sinh_vien_trong_lop",compact("ds"));
    }
}
