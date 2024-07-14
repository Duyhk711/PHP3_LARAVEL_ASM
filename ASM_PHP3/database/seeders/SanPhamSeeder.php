<?php

namespace Database\Seeders;

use Faker\Factory;
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
        $faker = Factory::create();
        $limit = 16 ;

        for ($i=0; $i < $limit; $i++) { 
            DB::table("san_pham")->insert([
               'ten_san_pham'=> $faker->name,
               'gia'=> $faker->numerify($string = '#####'),
               'hinh_anh'=> $faker->imageUrl($width = 50, $height = 50),
               'mo_ta'=> $faker->sentence,
               'so_luong'=> $faker->numerify($string = '##'),
               'trang_thai'=> $faker->boolean(),
               'id_danh_muc'=>$faker->numerify($string = '###')
           
        ]);
        }
    }
}
