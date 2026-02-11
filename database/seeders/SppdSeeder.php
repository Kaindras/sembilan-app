<?php

namespace Database\Seeders;

use App\Models\Sppd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SppdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sppd::factory(5)->create();
    }
}
