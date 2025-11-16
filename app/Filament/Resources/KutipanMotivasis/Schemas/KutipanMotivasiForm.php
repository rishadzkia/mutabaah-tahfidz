<?php

namespace App\Filament\Resources\KutipanMotivasis\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KutipanMotivasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('guru_id')
                    ->required()
                    ->numeric(),
                FileUpload::make('image_url')
                    ->image(),
                Textarea::make('teks_kutipan')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('sumber')
                    ->default(null),
            ]);
    }
}
