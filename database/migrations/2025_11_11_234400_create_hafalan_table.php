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
        Schema::create('hafalan', function (Blueprint $table) {
            $table->id();

       
            $table->foreignId('siswa_id')
                ->constrained('siswa') 
                ->onDelete('cascade');
            $table->foreignId('guru_id')
                ->nullable()
                ->constrained('guru')
                ->onDelete('set null');
            $table->string('surah', 100);
            $table->integer('juz');
            $table->string('ayat', 50);
            $table->enum('status', ['disetor', 'lulus', 'perbaikan'])->default('disetor');

            $table->timestamps();





           

         
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hafalan');
    }
};
