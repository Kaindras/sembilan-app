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
        Schema::create('pemiliks', function (Blueprint $table) {
            $table->id();
            $table->string('nm_pemilik')->nullable();
            $table->string('siup')->nullable();
            $table->string('sipi_sikpi')->nullable();
            $table->date('tgl_sipi_sikpi')->nullable();
            $table->string('alamat')->nullable();
            $table->string('wpp')->nullable();
            $table->string('dpi')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemiliks');
    }
};
