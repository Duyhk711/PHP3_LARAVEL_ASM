<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietGioHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("chi_tiet_gio_hang")->insert([
            [
                "id"=> "01",
                "id_gio_hang"=> "1",
                "id_san_pham"=> "1",
                "so_luong"=> "10",
            ],
            [
                "id"=> "02",
                "id_gio_hang"=> "2",
                "id_san_pham"=> "2",
                "so_luong"=> "20",
            ]
        ]);
    }
}
