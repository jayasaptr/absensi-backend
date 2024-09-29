<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Jaya',
            'email' => 'jaya@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // data dummy for company
        Company::create([
            'name' => 'Digitaliz',
            'email' => 'digitaliz@gmail.com',
            'address' => 'Barito Kuala, Kalimantan Selatan',
            'latitude' => '-3.2344799',
            'longitude' => '114.6223144',
            'radius' => '500',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);
    }
}
