<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'masjoel@gmail.com',
            'password' => Hash::make('123123123'),
        ]);

        Company::create([
            'name' => 'PT. Dutacoding Indonesia',
            'email' => 'smg@dutacoding.com',
            'address' => 'Jl. Raya No. 1, Semarang, Jawa Tengah',
            'latitude' => '-7.747033',
            'longitude' => '110.355398',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
