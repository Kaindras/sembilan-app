<?php

namespace Database\Seeders;

use App\Models\Pemilik;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemilikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
    
   $path = database_path('seeders/data/pemilik.csv');
        $file = fopen($path, 'r');

        // Skip header
        fgetcsv($file);

        while (($row = fgetcsv($file, 1000, ',')) !== false) {
            DB::table('pemiliks')->insert([
                'nm_pemilik' => $row[0],
                'siup'       => $row[1],
                // 'alamat' => $row[2],
                // 'wpp' => $row[3],
                // 'dpi' => $row[4],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        fclose($file);
    }

}
