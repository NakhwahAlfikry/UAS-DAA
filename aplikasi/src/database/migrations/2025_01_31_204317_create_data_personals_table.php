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
        Schema::create('data_personals', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Tinggi_Badan');
            $table->string('Berat_Badan');
            $table->integer('Usia');
            $table->string('Jam_Tidur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_personals');
    }
};
