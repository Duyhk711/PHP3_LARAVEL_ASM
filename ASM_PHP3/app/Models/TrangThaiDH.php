<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrangThaiDH extends Model
{
    use HasFactory;
    protected $table = 'trang_thai_don_hangs';
    protected $fillable = [
        'id',
        'ten_trang_thai'
    ];
}
