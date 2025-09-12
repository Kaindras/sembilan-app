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
            $table->string('no_sppd')->nullable();
            $table->string('hal_tugas')->nullable();
            $table->date('tgl_tugas')->nullable();
            $table->string('nm_ketua')->nullable();;
            $table->string('nm_anggota_1')->nullable();;
            $table->string('nm_anggota_2')->nullable();;
            $table->string('nm_anggota_3')->nullable();;
            $table->string('nm_anggota_4')->nullable();;
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
