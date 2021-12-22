<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
class account extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    protected $table='accounts';
    public function loaiTaiKhoan()
    {
        return $this->belongsTo('App\Models\account_type');
    }
    public function danhSachLopHocCuaSinhVien()
    {
      return $this->belongsToMany('App\Models\lophoc','lophoc_sinhvien','sinhvien_id','lophoc_id')->withPivot('cho_hay_khong',"sinhvien_id","lophoc_id");
    }
}
