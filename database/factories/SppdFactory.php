<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sppd>
 */
class SppdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_sppd'=> fake()->date(),
            'hal_tugas' =>fake()->company(),
            'tgl_tugas'=>fake()->date(),
            'nm_ketua'=>fake()->lastName(),
            'nm_anggota_1'=>fake()->lastName(),
            'nm_anggota_2'=>fake()->lastName(),
            'nm_anggota_3'=>fake()->lastName(),
            'nm_anggota_4'=>fake()->lastName(),
          
        
        ];
    }
}
