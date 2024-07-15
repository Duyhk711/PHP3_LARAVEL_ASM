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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('id_san_pham');
            $table->string('ma_san_pham')->unique(); 
            $table->string('ten_san_pham');
            $table->double('gia');
            $table->string('hinh_anh');
            $table->string('mo_ta');
            $table->integer('so_luong');
            $table->boolean('trang_thai');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_pham');
    }
};
