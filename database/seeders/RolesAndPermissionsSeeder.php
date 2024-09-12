<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Créer des permissions
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'view user']);

        // Créer des rôles et leur assigner des permissions
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo(['create user', 'edit user', 'delete user', 'view user']);

        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo(['view user']);
    }
}
