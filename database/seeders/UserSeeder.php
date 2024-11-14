<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Employee One',
            'email' => 'employee1@example.com',
            'password' => Hash::make('password'),
            'role' => 'employee',
            'structure' => 'DG/DF/Service solde',
        ]);

        User::create([
            'name' => 'Technician One',
            'email' => 'technician1@example.com',
            'password' => Hash::make('password'),
            'role' => 'technician',
            'structure' => 'DG/SSI',
        ]);

        User::create([
            'name' => 'Manager One',
            'email' => 'manager1@example.com',
            'password' => Hash::make('password'),
            'role' => 'manager',
            'structure' => 'DG/SSI',
        ]);
    }
}
