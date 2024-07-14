<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GioHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gio_hang')->insert([
            [
                "id_gio_hang"=>"1",
                "nguoi_dung_id"=> "1",
            ],
            [
              "id_gio_hang"=>"2",
                "nguoi_dung_id"=> "2",  
            ]
        ]);
        //
    }
}
