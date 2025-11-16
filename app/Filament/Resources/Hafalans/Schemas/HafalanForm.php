<?php

namespace App\Filament\Resources\Hafalans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HafalanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('siswa_id')
                    ->required()
                    ->numeric(),
                TextInput::make('guru_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('surah')
                    ->required(),
                TextInput::make('juz')
                    ->required()
                    ->numeric(),
                TextInput::make('ayat')
                    ->required(),
                Select::make('status')
                    ->options(['disetor' => 'Disetor', 'lulus' => 'Lulus', 'perbaikan' => 'Perbaikan'])
                    ->default('disetor')
                    ->required(),
            ]);
    }
}
