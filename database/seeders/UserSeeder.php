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
            'password' =>Hash::make('inspector1'),
            'color' => 'bg-blue-100',
            'remember_token' => Str::random(10),
            ]);
           
    }
}
