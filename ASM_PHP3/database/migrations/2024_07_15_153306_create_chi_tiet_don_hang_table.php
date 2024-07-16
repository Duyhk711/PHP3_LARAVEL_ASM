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
        Schema::create('chi_tiet_don_hang', function (Blueprint $table) {
            $table->increments('id_chi_tiet');
            $table->foreign('id_san_pham')->references('id_san_pham')->on('san_pham');
            $table->foreign('id_don_hang')->references('id_don_hang')->on('don_hang');
            $table->integer('so_luong');
            $table->double('gia');
            $table->double('thanh_tien');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_don_hang');
    }
};
