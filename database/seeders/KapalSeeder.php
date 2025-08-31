<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kapal;
use App\Models\Pemilik;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KapalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kapal::factory(30)->recycle([
            Pemilik::factory(5)->create(),
            User::all(),
            ])->create();
        }
    }
        
