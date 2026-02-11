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
            $table->string('no_izin')->nullable();
            $table->string('no_sertifikat')->nullable();
            $table->date('masa_berlaku')->nullable();
            $table->string('sertifikat_abk')->nullable();
            $table->string('sertifikat_qa')->nullable();
            $table->string('grade')->nullable();
            $table->foreignId('sppd_id')->constrained(
                table: 'sppds',
                indexName: 'sppd_id')->onDelete('cascade');
            $table->foreignId('pemilik_id')->constrained(
                table: 'pemiliks',
                indexName: 'kapals_pemilik_id'
            )->nullable()->onDelete('cascade');
            $table->foreignId('inspektur_id')->constrained(
                table: 'users',
                indexName: 'kapals_inspektur_id')->onDelete('cascade');
            $table->string('manual_haccp')->nullable();
            $table->string('ukuran_kapal')->nullable();
            $table->text('daerah_tangkap')->nullable();
            $table->integer('lama_trip')->nullable();
            $table->string('alat_tangkap')->nullable();
            $table->string('hasil_tangkap')->nullable();
            $table->integer('suhu_produk')->nullable();
            $table->integer('suhu_palka')->nullable();
            $table->integer('nilai_organoleptik')->nullable();
            $table->string('jenis_produk')->nullable();
            $table->integer('estimasi_berat')->nullable();
            $table->string('jenis_kapal')->nullable();
            $table->string('pelabuhan_domisili')->nullable();
            $table->string('pelabuhan_sandar_1')->nullable();
            $table->string('pelabuhan_sandar_2')->nullable();
            $table->string('kapal_aktif')->nullable()->default('Aktif');
            $table->date('tgl_inspeksi')->nullable();
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
