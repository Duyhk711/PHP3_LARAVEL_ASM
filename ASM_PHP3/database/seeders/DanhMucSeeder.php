<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danh_muc')->insert([
            [
                'id_danh_muc' => '1',
                'ten_danh_muc' => 'Bánh kem'
            ],
            [
                'id_danh_muc' => '2',
                'ten_danh_muc' => 'Đồ uống'
            ],
            [
                'id_danh_muc' => '3',
                'ten_danh_muc' => 'Đồ ăn nhanh'
            ],
            [
                'id_danh_muc' => '4',
                'ten_danh_muc' => 'Đồ chiên'
            ],
        ]);
    }
}
