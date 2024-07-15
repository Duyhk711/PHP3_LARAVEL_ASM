<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrangThaiDonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("trang_thai_don_hang")->insert([
            [
                "id_trang_thai"=> "1",
                "ten_trang_thai"=> "Hoàn tất",
            ],
            [
                "id_trang_thai"=> "2",
                "ten_trang_thai"=> "Chưa hoàn tất",
            ]
        ]);
        //
    }
}
