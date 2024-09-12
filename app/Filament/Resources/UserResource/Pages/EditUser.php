<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\EditRecord;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Hash du mot de passe uniquement si un nouveau mot de passe est saisi
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']); // Ne pas modifier le mot de passe si laissé vide
        }

        return $data;
    }

    protected function afterSave(): void
    {
        // Utiliser getRecord() pour accéder à l'utilisateur actuel
        $user = $this->getRecord();

        // Gérer les rôles en fonction de la propriété is_admin
        if ($user->is_admin) {
            $adminRole = Role::where('name', 'admin')->first();
            if ($adminRole) {
                $user->syncRoles([$adminRole]); // Assigner le rôle admin
            }
        } else {
            // Supprimer le rôle admin si l'utilisateur n'est plus admin
            $user->removeRole('admin');
        }
    }
}
