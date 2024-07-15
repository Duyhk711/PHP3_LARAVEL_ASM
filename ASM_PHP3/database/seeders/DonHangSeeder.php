<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("don_hang")->insert([
            [
                "id_don_hang"=> "1",
                "ma_don_hang"=> "dh01",
                "ten_nguoi_nhan"=> "Tống Hoàng Hiệp",
                "email_nguoi_nhan"=> "hiepthph123@abc.com",
                "so_dien_thoai"=> "0346574434",
                "dia_chi"=> "Yên Hưng, Yên Mô, Ninh Bình",
                "ngay_dat"=> "2024-07-15",
                "nguoi_dung_id"=> "2",
                "tong_tien"=> "1000",
                "ghi_chu"=> "không",
                "phuong_thuc_thanh_toan"=> "Tiền mặt",
                "id_trang_thai"=> "3",
            ]
        ]);
    }
}
