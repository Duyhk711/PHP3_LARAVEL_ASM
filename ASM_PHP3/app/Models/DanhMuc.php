<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\SanPham;

class DanhMuc extends Model
{
    use HasFactory;

    public function san_pham()
    {
        return $this->hasMany(SanPham::class, 'danh_muc_id');
    }
    protected $table = 'danh_mucs';
    protected $fillable = [
        'id',
        'ten_danh_muc'
    ];
}
