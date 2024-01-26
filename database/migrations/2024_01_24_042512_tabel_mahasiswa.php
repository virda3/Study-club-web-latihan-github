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
        schema::create('mahasiswa', function (blueprint $table){
            $table->id();
            $table->string('nim')-> unique();
            $table->string('nama');
            $table->string('kelas');
            $table->text('des');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema:: dropIfExists('tabel_mahasiswa');
    }
};
