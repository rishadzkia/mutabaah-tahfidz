<?php

namespace App\Filament\Guru\Resources\Hafalans\Schemas;

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
                    ->disabled()
                    ->numeric(),
                // TextInput::make('guru_id')
                //     ->numeric()
                //     ->disabled()
                //     ->default(null),
                TextInput::make('surah')
                ->disabled()
                    ->required(),
                TextInput::make('juz')
                    ->required()
                    ->disabled()
                    ->numeric(),
                TextInput::make('ayat')
                ->disabled()
                    ->required(),
            Select::make('status')
                ->label('Status Penilaian')
                ->options([
                    'disetor' => 'Disetor',
                    'lulus' => 'Lulus',
                    'perbaikan' => 'Perbaikan',
                ])
                ->required(),
            ]);
    }
}
