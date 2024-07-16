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
        Schema::table('chi_tiet_gio_hang', function (Blueprint $table) {
            //
            $table->foreign('gio_hang_id')->references('id')->on('gio_hang')->onDelete('cascade');
    $table->foreign('san_pham_id')->references('id_san_pham')->on('san_pham')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chi_tiet_gio_hang', function (Blueprint $table) {
            //
            Schema::dropIfExists('chi_tiet_gio_hang');
        });
    }
};