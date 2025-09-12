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
        Schema::create('abks', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nm_sertifikat')->nullable();
            $table->string('no_sertifikat_abk')->nullable();
            $table->date('tgl_pelatihan')->nullable();
            $table->foreignId('kapal_id')->constrained(
                table: 'kapals',
                indexName: 'kapal_id')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abks');
    }
};
