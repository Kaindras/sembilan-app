<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemilik>
 */
class PemilikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=> fake()->company(),
            'siup' =>fake()->iso8601(),
            'sipi_sikpi'=>fake()->iso8601(),
            'tgl_sipi_sikpi'=>fake()->date(),
            'alamat'=>fake()->address(),
            'wpp' => fake()->address(),
            'dpi' => fake()->address()
        ];
    }
}
