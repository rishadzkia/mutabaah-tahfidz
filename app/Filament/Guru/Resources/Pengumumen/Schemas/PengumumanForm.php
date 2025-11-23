<?php

namespace App\Filament\Guru\Resources\Pengumumen\Schemas;

use Filament\Facades\Filament;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class PengumumanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                
              TextInput::make('guru_id')
    ->default(fn() => Filament::auth()->user()->id)
    ->required(),


                TextInput::make('judul')
                    ->label('Judul Pengumuman')
                    ->required()
                    ->maxLength(255),

                Textarea::make('isi')
                    ->label('Isi Pengumuman')
                    ->rows(6)
                    ->required(),
            ]);
    }
}
