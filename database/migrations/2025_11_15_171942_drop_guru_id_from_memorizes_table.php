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
        // Schema::table('memorizes', function (Blueprint $table) {
        //     // Hapus foreign key dulu
        //     $table->dropForeign(['hafalan_guru_id_foreign']);
        //     // Baru hapus column
        //     $table->dropColumn('guru_id');
        // });
    }

    public function down(): void
    {
        // Schema::table('memorizes', function (Blueprint $table) {
        //     $table->unsignedBigInteger('guru_id')->nullable();
        //     $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('cascade');
        // });
    }
};
