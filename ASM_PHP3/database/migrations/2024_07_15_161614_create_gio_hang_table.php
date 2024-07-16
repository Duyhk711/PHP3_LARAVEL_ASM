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
        Schema::create('gio_hang', function (Blueprint $table) {
<<<<<<<< HEAD:ASM_PHP3/database/migrations/2024_07_15_161614_create_gio_hang_table.php
            $table->id();
            $table->unsignedBigInteger('nguoi_dung_id');
           
========
            $table->id('id_gio_hang');
            $table->string('id_nguoi_dung');
            $table->foreign('id_nguoi_dung')->references('id_nguoi_dung')->on('users');
>>>>>>>> main:ASM_PHP3/database/migrations/2024_07_15_152724_create_gio_hang_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gio_hang');
    }
};
