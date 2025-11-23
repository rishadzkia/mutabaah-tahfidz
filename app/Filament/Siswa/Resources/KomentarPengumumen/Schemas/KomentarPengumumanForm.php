<?php

namespace App\Filament\Siswa\Resources\KomentarPengumumen\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KomentarPengumumanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('pengumuman_id')
                    ->disabled()
                    ->numeric(),
                TextInput::make('siswa.user.name')
                    ->required()
                    ->numeric(),
                Textarea::make('komentar')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
