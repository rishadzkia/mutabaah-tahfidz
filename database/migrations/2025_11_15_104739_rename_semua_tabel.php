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
        Schema::rename('siswa', 'students');
        Schema::rename('guru', 'teachers');
        Schema::rename('hafalan', 'memorizes');
        Schema::rename('pengumuman', 'anouncements');
        Schema::rename('murottal', 'murottals');
        Schema::rename('komentar_pengumuman', 'comments');
        Schema::rename('kutipan_motivasi', 'motivations');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('siswa', 'students');
        Schema::rename('guru', 'teachers');
        Schema::rename('hafalan', 'memorizes');
        Schema::rename('pengumuman', 'anouncements');
        Schema::rename('murottal', 'murottals');
        Schema::rename('komentar_pengumuman', 'comments');
        Schema::rename('kutipan_motivasi', 'motivations');
    }
};
