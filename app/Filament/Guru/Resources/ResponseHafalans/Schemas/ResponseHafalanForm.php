<?php

namespace App\Filament\Guru\Resources\ResponseHafalans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ResponseHafalanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('guru_id')
                    ->required()
                    ->numeric(),
                TextInput::make('hafalan_id')
                    ->required()
                    ->numeric(),
                Toggle::make('is_marked')
                    ->required(),
            ]);
    }
}
