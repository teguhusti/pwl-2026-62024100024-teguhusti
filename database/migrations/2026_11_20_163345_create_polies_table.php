<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('polies', function (Blueprint $table) {
            $table->id();
            $table->string('poli_code')->unique(); // Kode Poli (Unik)
            $table->string('name'); // Nama Poli
            $table->text('description')->nullable(); // Deskripsi
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('polies');
    }
};