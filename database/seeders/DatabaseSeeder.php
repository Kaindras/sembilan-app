<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kapal;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pemilik;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\KapalSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        $this->call([UserSeeder::class,PemilikSeeder::class, KapalSeeder::class]);
    }
}
      