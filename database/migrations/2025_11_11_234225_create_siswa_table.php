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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();

            
            $table->foreignId('user_id')
                ->unique()
                ->constrained('users')
                ->onDelete('cascade');
            $table->foreignId('guru_id')
                ->nullable()
                ->constrained('guru')
                ->onDelete('set null');
            $table->string('image')->nullable(); 
            $table->string('kelas', 50)->nullable();
            $table->integer('angkatan')->nullable();

            $table->timestamps();





           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
