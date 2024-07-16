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
        $limit = 10 ;

        for ($i=0; $i < $limit; $i++) { 
            DB::table("san_phams")->insert([
               'ma_san_pham'=> $faker-> name,
               'ten_san_pham'=> $faker->name,
               'gia'=> $faker->numerify($string = '#####'),
               'hinh_anh'=> $faker->imageUrl($width = 50, $height = 50),
               'mo_ta'=> $faker->sentence,
               'so_luong'=> $faker->numerify($string = '##'),
               'trang_thai'=> $faker->boolean(),
               'danh_muc_id'=>$faker->numerify($string = '1')
           
        ]);
        }
    }
}
