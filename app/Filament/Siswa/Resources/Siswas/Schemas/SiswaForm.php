<?php

namespace App\Filament\Siswa\Resources\Siswas\Schemas;

use Filament\Facades\Filament;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SiswaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('nama_siswa')
                ->default(fn() => optional(Filament::auth()->user())->name)
                ->disabled()
                ->label('Nama Siswa'),


            Hidden::make('user_id')
                ->default(fn() => optional(Filament::auth()->user())->id),
            // TextInput::make('guru_id')
            //     ->numeric()
            //     ->default(null),
            TextInput::make('kelas')
                    ->default(null),
                TextInput::make('angkatan')
                    ->numeric()
                    ->default(null),
                FileUpload::make('image')
                    ->image()
                    ->directory('siswa')
                    ->nullable(),
               
                // Toggle::make('is_siswa')
                //     ->required(),
            ]);
    }
}
