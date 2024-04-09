<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Olivier PITOIS',
            'mail' => 'olivier.pitois@aftec.fr',
            'password' => bcrypt('aftecvannes'), // Assurez-vous de hasher le mot de passe
        ]);

        User::create([
            'name' => 'Alex LE BLAY',
            'mail' => 'alex.leblay@aftec.fr',
            'password' => bcrypt('aftecvannes'), // Assurez-vous de hasher le mot de passe
        ]);
    }
}
