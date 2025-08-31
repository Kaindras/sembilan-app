<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Pemilik;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kapal>
 */
class KapalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nama_kapal' => fake()->word(),
        'no_sertifikat' => fake()->iso8601(),
        'grade' => fake()->word(),
        'pemilik_id' => Pemilik::factory(),
        'inspektur_id' => User::factory(),
        'ukuran' => fake()->randomNumber(5, false),
        'daerah_tangkap' => fake()->address(),
        'alat_tangkap' => fake()->word(2),
        'lama_trip' => fake()->time('+3 weeks'),
        'jenis_ikan' => fake()->word(2),
        'penanganan' => fake()->word(2),
        'suhu' => fake()->randomNumber(5, false),
        'suhu_palka' => fake()->randomNumber(5, false),
        'nilai_organoleptik' => fake()->randomNumber(5, false),
        'estimasi_berat' => fake()->randomNumber(5, false),
        'tipe_kapal' => fake()->word(2),
        'tgl_inspeksi' => fake()->date(),
        'pelabuhan_pangkalan' => fake()->city(),
        'kapal_aktif' => fake()->text(),
        'uraian' => fake()->text(),
        'catatan' => fake()->text(),
        
       
       
        
        ];
    }
}
