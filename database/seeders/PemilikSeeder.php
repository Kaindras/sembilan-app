<?php

namespace Database\Seeders;

use App\Models\Pemilik;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemilikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pemilik::factory(5)->create();
    }
}
