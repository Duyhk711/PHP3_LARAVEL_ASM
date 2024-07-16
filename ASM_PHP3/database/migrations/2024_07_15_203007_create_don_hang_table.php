<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('don_hang', function (Blueprint $table) {
            $table->increments('id_don_hang');
            $table->string('ma_don_hang')->unique();
            $table->string('ten_nguoi_nhan');
            $table->string('email_nguoi_nhan');
            $table->string('so_dien_thoai');
            $table->string('dia_chi');
<<<<<<<< HEAD:ASM_PHP3/database/migrations/2024_07_15_203007_create_don_hang_table.php
            $table->date('ngay_dat');  
            $table->unsignedBigInteger('nguoi_dung_id');
========
            $table->date('ngay_dat');
>>>>>>>> main:ASM_PHP3/database/migrations/2024_07_15_153115_create_don_hang_table.php
            $table->double('tong_tien');
            $table->string('ghi_chu');
            $table->string('phuong_thuc_thanh_toan');
            $table->unsignedBigInteger('id_trang_thai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hang');
    }
};
