<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;

    protected $table = 'don_hang';
    protected $fillable = 
        [
            'id_don_hang',
            'ma_don_hang',
            'ten_nguoi_nhan',
            'email_nguoi_nhan',
            'so_dien_thoai',
            'dia_chi',
            'ngay_dat',
            'nguoi_dung_id',
            'tong_tien',
            'ghi_chu',
            'phuong_thuc_thanh_toan',
            'id_trang_thai',
        ]
    ;
}
