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
        Schema::table('don_hangs', function (Blueprint $table) {
            //
            $table->foreign('nguoi_dung_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_trang_thai')->references('id')->on('trang_thai_don_hangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('don_hangs', function (Blueprint $table) {
            //
            Schema::dropIfExists('don_hangs');
        });
    }
};