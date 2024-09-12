<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Test',
            'email' => 'test@test.fr', // Correction du champ 'mail' en 'email'
            'password' => bcrypt('test'), // Assurez-vous de hasher le mot de passe
            'is_admin' => true, // Définit l'utilisateur comme administrateur
        ]);
    }
}

