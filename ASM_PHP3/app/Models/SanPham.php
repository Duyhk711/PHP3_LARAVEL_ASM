<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    use HasFactory;

    public function createSP($data) {
        DB::table('san_pham')->insert($data);
    }
    protected $table = 'san_pham';
    protected $fillable = [
        'id_san_pham',
        'ten_san_pham',
        'gia',
        'hinh_anh',
        'mo_ta',
        'so_luong',
        'trang_thai',
        'id_danh_muc'
    ];
}
