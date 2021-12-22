<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\GiangVienController;
use App\Http\Controllers\SinhVienController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AdminController;
/*
|__________________________________________________________________________
| Web Routes
|__________________________________________________________________________
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'auth'], function () {
  Route::get('/danh-sach-giang-vien',[AdminController::class,'dsGiangVien'])->name('ds-giang-vien');
  Route::get('/admin',[AdminController::class,'adminMain'])->name('adminMain');
  Route::get('/admin-them-giang-vien',[AdminController::class,'formThemGiangVien'])->name('form-them-giang-vien');
  Route::post('/admin-post-them-giang-vien',[AdminController::class,'postThemGiangVien'])->name('post-form-them-giang-vien');
});


Route::group(['middleware' => ['auth','giangvien']], function () {
     
      Route::get('/Danh_sach_lop_day',[GiangVienController::class,'ds_lop'])->name('ds_lop');

      Route::get('/guimail',[GiangVienController::class,'guimail'])->name('guimail');
      Route::get('/',[MainController::class,'trang_chu'])->name('trangchu11');
      
      Route::get('/sua_lop_hoc/{id}',[GiangVienController::class,'sua_lop_hoc'])->name('sua_lop_hoc');
      Route::post('/sua_lop_hoc/{id}',[GiangVienController::class,'xl_sua_lop_hoc'])->name('xl_sua_lop_hoc');

      Route::get('/xoa_lop_hoc/{id}',[GiangVienController::class,'xl_xoa_lop_hoc'])->name('xl_xoa_lop_hoc');

      Route::get('/them_lop_hoc',[GiangVienController::class,'them_lop_hoc'])->name('them_lop_hoc');
      Route::post('/them_lop_hoc',[GiangVienController::class,'xl_them_lop_hoc'])->name('xl_them_lop_hoc');

      Route::get('/Duyet_danh_Sach_cho/{id}',[GiangVienController::class,'Duyet_danh_Sach_cho'])->name('Duyet_danh_Sach_cho');
      Route::post('/Duyet_danh_Sach_cho/{sinhvien_id}/{lophoc_id}',[GiangVienController::class,'xl_Duyet_danh_Sach_cho'])->name('xl_Duyet_danh_Sach_cho');
      Route::post('/Xoa_sinh_vien_trong_danh_sach_cho/{sinhvien_id}/{lophoc_id}',[GiangVienController::class,'Xoa_sinh_vien_trong_danh_sach_cho'])->name('Xoa_sinh_vien_trong_danh_sach_cho');


      Route::get('/them_sinh_vien_vao_lop/{id}',[GiangVienController::class,'them_sinh_vien_vao_lop'])->name('them_sinh_vien_vao_lop');
      Route::post('/them_sinh_vien_vao_lop/{id}',[GiangVienController::class,'xl_them_sinh_vien_vao_lop'])->name('xl_them_sinh_vien_vao_lop');


      Route::get('/Kich_sinh_vien_ra_khoi_lop/{id}',[GiangVienController::class,'Kich_sinh_vien_ra_khoi_lop'])->name('Kich_sinh_vien_ra_khoi_lop');
      Route::post('/Kich_sinh_vien_ra_khoi_lop/{sinhvien_id}/{lophoc_id}',[GiangVienController::class,'xl_Kich_sinh_vien_ra_khoi_lop'])->name('xl_Kich_sinh_vien_ra_khoi_lop');

          
});

Route::group(['middleware' => ['auth','sinhvien']], function () {
 
   //  Route::get('/',[MainController::class,'trang_chu'])->name('trangchu');
//  Route::get('/',[MainController::class,'trang_chu'])->name('trangchu');

  //  Route::get('/',[MainController::class,'trang_chu'])->name('trangchu');

    Route::get('/danh_sach_lop_hoc',[SinhVienController::class,'DS_Lophoccuasinhvien'])->name('DS_Lophoccuasinhvien');

    Route::get('/tham_gia_lop_hoc',[SinhVienController::class,'tham_gia_lop_hoc'])->name('tham_gia_lop_hoc');
    Route::post('/tham_gia_lop_hoc',[SinhVienController::class,'xl_tham_gia_lop_hoc'])->name('xl_tham_gia_lop_hoc');

    Route::get('/huy_lop_hoc/{id}',[SinhVienController::class,'huy_lop_hoc'])->name('huy_lop_hoc');
});

Route::get('/quen_mat_khau',[GiangVienController::class,'quen_mat_khau'])->name('quen_mat_khau');
Route::post('/quen_mat_khau',[GiangVienController::class,'xl_quen_mat_khau'])->name('xl_quen_mat_khau');
 

Route::get('/doi_mat_khau',[GiangVienController::class,'doi_mat_khau'])->name('doi_mat_khau');
Route::post('/doi_mat_khau',[GiangVienController::class,'xl_doi_mat_khau'])->name('xl_doi_mat_khau');

Route::get('/doi_thong_tin',[GiangVienController::class,'doi_thong_tin'])->name('doi_thong_tin');
Route::post('/doi_thong_tin',[GiangVienController::class,'xl_doi_thong_tin'])->name('xl_doi_thong_tin');


Route::get('/dang_xuat',[AccountController::class,'dangxuat'])->name('dang_xuat');
Route::get('/Đừng có đi lung tung',[MainController::class,'trang_chu'])->name('trangchu');

Route::get('/dang_nhap',[AccountController::class,'dang_nhap'])->name('dang_nhap')->middleware('guest');
Route::post('/dang_nhap',[AccountController::class,'xl_dang_nhap'])->name('xl_dang_nhap');
