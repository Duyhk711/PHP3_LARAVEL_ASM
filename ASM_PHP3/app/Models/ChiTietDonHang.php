<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_don_hangs';

    protected $fillable = [
        'don_hang_id',
        'san_pham_id',
        'ngay_dat',
        'so_luong',
        'thanh_tien',
        'trang_thai_id',
    ];

    public function donHang (){
        return $this->belongsTo(DonHang::class,  'don_hang_id');
    }
    public function sanPham (){
        return $this->belongsTo(SanPham::class, 'san_pham_id');
    }
    
}