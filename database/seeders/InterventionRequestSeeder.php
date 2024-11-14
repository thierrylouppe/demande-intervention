<?php

namespace Database\Seeders;

use App\Models\InterventionRequest;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterventionRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('role', 'employee')->first();
        $technician = User::where('role', 'technician')->first();

        InterventionRequest::create([
            'user_id' => $user->id,
            'technician_id' => $technician->id,
            'title' => 'Ordinateur en panne',
            'description' => 'L’ordinateur ne s’allume plus.',
            'status' => 'assigned',
        ]);

        InterventionRequest::create([
            'user_id' => $user->id,
            'title' => 'Problème de connexion',
            'description' => 'Impossible de se connecter au réseau interne.',
            'status' => 'pending',
        ]);
    }
}
