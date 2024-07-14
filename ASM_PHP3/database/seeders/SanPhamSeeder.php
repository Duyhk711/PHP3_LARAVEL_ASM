<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("san_pham")->insert([
            
                "id"=> "1",
                "ten_san_pham"=> "iphone X",
                "gia"=> "10000",
                "hinh_anh"=> "Chưa có",
                "mo_ta"=> "Máy xịn",
                "so_luong"=> "100",
                 "trang_thai"=> "1",
                 "san_pham_id"=>"2"
           
        ]);
    }
}
