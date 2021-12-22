<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class account_type extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="account_types";
    public function danhSachTaiKhoan()
    {
        return $this->hasMany('App\Models\taikhoan');
    }
}
