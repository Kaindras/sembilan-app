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
        Schema::create('sppds', function (Blueprint $table) {
            $table->id();
            $table->string('no_sppd');
            $table->string('nm_tugas');
            $table->date('tgl_tugas');
            $table->string('nm_ketua');
            $table->string('nm_anggota_1');
            $table->string('nm_anggota_2');
            $table->string('nm_anggota_3');
            $table->string('nm_anggota_4');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sppds');
    }
};
