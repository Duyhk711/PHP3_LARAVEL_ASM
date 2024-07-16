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
        Schema::create('chi_tiet_gio_hang', function (Blueprint $table) {
<<<<<<<< HEAD:ASM_PHP3/database/migrations/2024_07_15_172549_create_chi_tiet_gio_hang_table.php
            $table->id();
            $table->unsignedBigInteger('gio_hang_id');
            $table->unsignedInteger('san_pham_id');
========
            $table->increments('id');
            $table->foreign('id_gio_hang')->references('id_gio_hang')->on('gio_hang');
            $table->foreign('id_san_pham')->references('id_san_pham')->on('san_pham');
>>>>>>>> main:ASM_PHP3/database/migrations/2024_07_15_153005_create_chi_tiet_gio_hang_table.php
            $table->integer('so_luong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_gio_hang');
    }
};
