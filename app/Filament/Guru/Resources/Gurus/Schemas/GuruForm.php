<?php

namespace App\Filament\Guru\Resources\Gurus\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GuruForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('mapel_diampu')
                    ->default(null),
                DatePicker::make('mulai_kerja'),
                TextInput::make('foto_url')
                    ->default(null),
            ]);
    }
}
