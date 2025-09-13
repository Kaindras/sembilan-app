<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Eka Indra Supriyatna',
            'username' => 'kaindras',
            'email_verified_at' => now(),
            'email' => 'kaindras2005@gmail.com',
            'password' =>Hash::make('admin1'),
            'color' => 'bg-green-100',
            'remember_token' => Str::random(10),
            ]);
        User::factory()->create([
            'name' => 'Ni Putu Sinta Berliana, S.Si',
            'username' => 'sinta',
            'email_verified_at' => now(),
            'email' => 'sinta@gmail.com',
            'password' =>Hash::make('admin2'),
            'color' => 'bg-green-100',
            'remember_token' => Str::random(10),
            ]);

             User::factory()->create([
            'name' => 'Anjali Nur Shoimah',
            'username' => 'anjali',
            'email_verified_at' => now(),
            'email' => 'anjali@gmail.com',
            'password' =>Hash::make('admin3'),
            'color' => 'bg-yellow-100',
            'remember_token' => Str::random(10),
            ]);
        User::create([
            'name' => 'Ni Desak Nyoman Pradnyani',
            'username' => 'pradnyani',
            'email' => 'nipradnyani@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('verifikator1'),
            'color' => 'bg-red-100',
            'remember_token' => Str::random(10),
            ]);
        User::create([
            'name' => 'Ni Ketut Wijasari',
            'username' => 'wijasari',
            'email' => 'wijasari@gmail.com',
            'email_verified_at' => now(),
            'password' =>Hash::make('verifikator2'),
            'color' => 'bg-red-100',
            'remember_token' => Str::random(10),
            ]);
           
    }
}
