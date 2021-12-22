<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminMain(){
        return view('admin.admin_main');
    }
    public function dsGiangVien(){
        return view('admin.ds-giang-vien');
    }
    public function formThemGiangVien(){
        return view('admin.them-giang-vien');
    }
    public function postThemGiangVien(Request $req){
        return redirect()->route('ds-giang-vien');
    }
}
