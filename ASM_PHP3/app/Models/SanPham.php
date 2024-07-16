<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    use HasFactory;

    public function createSP($data) {
        DB::table('san_phams')->insert($data);
    }
    protected $table = 'san_phams';
    protected $fillable = [
        'id',
        'ma_san_pham',
        'ten_san_pham',
        'gia',
        'hinh_anh',
        'mo_ta',
        'so_luong',
        'trang_thai',
        'danh_muc_id'
    ];
}
