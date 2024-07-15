<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('danh_muc')->insert([
            [
                'id' => '1',
                'ten_danh_muc' => 'Bánh kem'
            ],
            [
                'id' => '2',
                'ten_danh_muc' => 'Đồ uống'
            ],
            [
                'id' => '3',
                'ten_danh_muc' => 'Đồ ăn nhanh'
            ],
            [
                'id' => '4',
                'ten_danh_muc' => 'Đồ chiên'
            ],
        ]);
    }
}
