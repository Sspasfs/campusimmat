<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),

                TextInput::make('password')
                    ->password()
                    ->required(fn ($record) => !$record) // Requis seulement lors de la création
                    ->maxLength(255)
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state)), // Hash du mot de passe

                Checkbox::make('is_admin')
                    ->label('Admin')
                    ->default(false),

                Select::make('roles')
                    ->multiple()
                    ->relationship('roles', 'name') // Associe les rôles avec l'utilisateur
                    ->options(Role::all()->pluck('name', 'id'))
                    ->preload(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('email')
                    ->sortable()
                    ->searchable(),

                BooleanColumn::make('is_admin')
                    ->label('Admin'),

                TextColumn::make('roles.name')
                    ->label('Roles')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                // Ajoute des filtres si nécessaire
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\UserResource\Pages\ListUsers::route('/'),
            'create' => \App\Filament\Resources\UserResource\Pages\CreateUser::route('/create'),
            'edit' => \App\Filament\Resources\UserResource\Pages\EditUser::route('/{record}/edit'),
        ];
    }

    protected static function getPermissions(): array
{
    return [
        'viewAny' => 'view_any_user',
        'view' => 'view_user',
        'create' => 'create user', // Assure-toi que cette permission est bien configurée
        'update' => 'update_user',
        'delete' => 'delete_user',
    ];
}

}
