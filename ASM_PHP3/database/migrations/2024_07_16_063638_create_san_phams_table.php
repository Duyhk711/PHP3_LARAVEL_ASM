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
            $table->id();
            $table->string('ma_san_pham')->unique(); 
            $table->string('ten_san_pham');
            $table->double('gia');
            $table->string('hinh_anh');
            $table->string('mo_ta');
            $table->integer('so_luong');
            $table->boolean('trang_thai');
            $table->unsignedBigInteger('danh_muc_id');
            $table->timestamps();
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