<?php

namespace App\Filament\Guru\Resources\KomentarPengumumen\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
 
class KomentarPengumumanForm
{
    public static function configure(Schema $schema): Schema  
    {
        return $schema
            ->components([
                TextInput::make('pengumuman.judul') 
                    ->required() 
                    ->numeric(), 
                TextInput::make('siswa_id') 
                    ->required()
                    ->numeric(),
                Textarea::make('komentar')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
