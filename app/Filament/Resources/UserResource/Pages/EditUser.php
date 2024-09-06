<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['password']) && $data['password']) {
            $data['password'] = bcrypt($data['password']); // Hash du mot de passe seulement si changé
        } else {
            unset($data['password']); // Garde le mot de passe inchangé
        }

        return $data;
    }
}
