<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DanhMuc extends Model
{
    use HasFactory;


    protected $table = 'danh_mucs';
    protected $fillable = [
        'id',
        'ten_danh_muc'
    ];
}
