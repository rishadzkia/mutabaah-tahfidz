<?php

namespace App\Filament\Resources\Murottals\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MurottalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('qari_name')
                    ->required(),
                TextInput::make('surah')
                    ->required(),
                TextInput::make('file_url')
                    ->required(),
            ]);
    }
}
