<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class lophoc extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='lophoc';

    public function danhSachSinhVien()
    {
      return $this->belongsToMany('App\Models\account','lophoc_sinhvien','lophoc_id','sinhvien_id')->withPivot('cho_hay_khong',"sinhvien_id","lophoc_id");
    }
}
