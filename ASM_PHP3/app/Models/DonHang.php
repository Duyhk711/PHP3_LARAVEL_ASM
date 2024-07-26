<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;

    protected $table = 'don_hangs';
    
    protected $fillable = 
        [

            'ma_don_hang',
            'user_id',
            'so_dien_thoai',
            'dia_chi',
            'tong_tien',
            'ghi_chu',
            'phuong_thuc_thanh_toan',
           
        ];

        public function user (){
            return $this->belongsTo(User::class, 'user_id');
        }

        public function chiTietDonHangs() {
            return $this->hasMany(ChiTietDonHang::class, 'don_hang_id');
        }
}
