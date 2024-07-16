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
        Schema::table('chi_tiet_gio_hangs', function (Blueprint $table) {
             $table->foreign('gio_hang_id')->references('id')->on('gio_hangs')->onDelete('cascade');
            $table->foreign('san_pham_id')->references('id')->on('san_phams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chi_tiet_gio_hangs', function (Blueprint $table) {
            //
            Schema::dropIfExists('chi_tiet_gio_hangs');
        });
    }
};
