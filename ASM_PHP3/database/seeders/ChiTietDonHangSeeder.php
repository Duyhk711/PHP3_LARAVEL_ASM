<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChiTietDonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("chi_tiet_don_hang")->insert([
            [
                "id_chi_tiet"=> "001",
                "id_san_pham"=> "1",
                "id_don_hang"=> "20",
                "so_luong"=> "29",
                "gia"=> "32313",
                "thanh_tien"=> "32000",
            ],
            [
                "id_chi_tiet"=> "002",
                "id_san_pham"=> "2",
                "id_don_hang"=> "20",
                "so_luong"=> "53",
                "gia"=> "93530",
                "thanh_tien"=> "32000",
            ]
        ]);
    }
}
