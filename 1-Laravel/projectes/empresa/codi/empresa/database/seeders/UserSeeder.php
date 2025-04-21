<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@clotfje.net',
            'password' => Hash::make('ClotFje2425#'),
            'role' => 'administrador',
        ]);

        // Create consultant user
        User::create([
            'name' => 'Consultor',
            'email' => 'consultor@clotfje.net',
            'password' => Hash::make('FjeClot2425@'),
            'role' => 'consultor',
        ]);
    }
}
