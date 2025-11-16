<?php

namespace App\Filament\Resources\Siswas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SiswaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('guru_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('kelas')
                    ->default(null),
                TextInput::make('angkatan')
                    ->numeric()
                    ->default(null),
                Toggle::make('is_siswa')
                    ->required(),
            ]);
    }
}
