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
            'mail' => 'test@test.fr',
            'password' => bcrypt('test'), // Assurez-vous de hasher le mot de passe
        ]);

    }
}
