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
        Schema::create('kapals', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kapal')->nullable();
            $table->string('no_sertifikat')->nullable();
            $table->string('grade')->nullable();
            $table->foreignId('pemilik_id')->constrained(
                table: 'pemiliks',
                indexName: 'kapals_pemilik_id'
            )->nullable()->nullable();
            $table->foreignId('inspektur_id')->constrained(
                table: 'users',
                indexName: 'kapals_inspektur_id')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('daerah_tangkap')->nullable();
            $table->string('alat_tangkap')->nullable();
            $table->string('lama_trip')->nullable();
            $table->string('jenis_ikan')->nullable();
            $table->string('penanganan')->nullable();
            $table->string('suhu')->nullable();
            $table->string('suhu_palka')->nullable();
            $table->string('nilai_organoleptik')->nullable();
            $table->string('estimasi_berat')->nullable();
            $table->string('tipe_kapal')->nullable();
            $table->date('tgl_inspeksi')->nullable();
            $table->string('pelabuhan_pangkalan')->nullable();
            $table->string('kapal_aktif')->nullable();
            $table->text('uraian')->nullable();
            $table->text('catatan')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kapals');
    }
};
