<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("users")->insert([
            [
                "id"=>"1",
                "name"=> "Lê Việt Anh",
                "email"=> "anhlvph42212@fpt.edu.vn",
                "password"=> bcrypt("1234"),
                "so_dien_thoai"=> "0356328663",
                "dia_chi"=> "Xóm giữa",
            ]
        ]);
    }
}
