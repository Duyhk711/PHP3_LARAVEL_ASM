<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("")->insert([
            [
                "id_don_hang"=> "1",
                "ma_don_hang"=> "sp01",
                "ten_nguoi_nhan"=> "Nguyễn Văn A",
                "email_nguoi_nhan"=> "anguyenvan@abc.com",
                "so_dien_thoai"=> "0345672386",
                "dia_chi"=> "Tổ A, Phường B, Huyện C",
                "ngay_dat"=> "2024/15/07",
                "nguoi_dung_id"=> "2004",
                "tong_tien"=> "100000",
                "ghi_chu"=> "Không",
                "phuong_thuc_thanh_toan"=> "Tiền mặt",
                "id_trang_thai"=> "1",
            ],
            [
                "id_don_hang"=> "2",
                "ma_don_hang"=> "sp02",
                "ten_nguoi_nhan"=> "Lê Văn D",
                "email_nguoi_nhan"=> "dlevan@abc.com",
                "so_dien_thoai"=> "0345672386",
                "dia_chi"=> "Tổ C, Phường A, Huyện C",
                "ngay_dat"=> "2024/15/07",
                "nguoi_dung_id"=> "2005",
                "tong_tien"=> "100000",
                "ghi_chu"=> "Không",
                "phuong_thuc_thanh_toan"=> "Chuyển Khoản",
                "id_trang_thai"=> "1",
            ],
        ]);
    }
}
