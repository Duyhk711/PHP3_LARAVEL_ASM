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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_san_pham')->unique(); 
            $table->string('ten_san_pham');
            $table->double('gia');
            $table->string('hinh_anh');
            $table->string('mo_ta');
            $table->integer('so_luong');
            $table->boolean('trang_thai');
            $table->integer('id_danh_muc')->unsigned();
            $table->timestamps();
            $table->foreign('id_danh_muc')->references('id')->on('danh_mucs');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
