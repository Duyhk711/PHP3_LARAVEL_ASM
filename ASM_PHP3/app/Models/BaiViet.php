<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;
    protected $table="bai_viets";
    protected $fillable = [
        'ten_bai_viet',
        'hinh_anh',
        'noi_dung',
        'ngay_dang'
    ];
}
