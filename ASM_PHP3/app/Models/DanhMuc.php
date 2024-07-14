<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DanhMuc extends Model
{
    use HasFactory;


    protected $table = 'danh_muc';
    protected $fillable = [
        'id_danh_muc',
        'ten_danh_muc'
    ];
}
