<?php

namespace App\Filament\Resources\Murottals\Schemas;  

use Filament\Forms\Components\FileUpload;
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

                FileUpload::make('file_url')
                    ->label('Unggah File Audio Murottal')
                    ->disk('public')
                    ->directory('audio/murottal')
                    ->dehydrateStateUsing(function ($state) {
                        return $state ? basename($state) : null;
                    })
                    ->acceptedFileTypes(['audio/mpeg', 'audio/mp3', 'audio/wav'])
                    ->maxSize(10240)
                    ->required(),



            ]);
    }
}
