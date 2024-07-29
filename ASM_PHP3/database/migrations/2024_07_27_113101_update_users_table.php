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
        Schema::table('users', function(Blueprint $table) {
            $table ->year('nam_sinh') ->after('password')->nullable();
            $table ->string('so_dien_thoai') ->after('nam_sinh')->nullable();
            $table ->string('dia_chi')->after('so_dien_thoai')->nullable();
            $table ->enum('gioi_tinh', ['Nam', 'Nữ', 'Khác'])->after('dia_chi')->nullable();
            $table ->string('anh_dai_dien')->after('gioi_tinh')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users',function (Blueprint $table) {
           $table->dropSoftDeletes(); 
        });
    }
};
    