<?php

namespace App\Filament\Siswa\Resources\Hafalans\Schemas;

use Filament\Facades\Filament;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HafalanForm
{ 
    public static function configure(Schema $schema): Schema
    {

       
        return $schema
            ->components([
            TextInput::make('nama_siswa')
                ->default(fn() => optional(Filament::auth()->user())->name) 
                ->disabled()
                ->label('Nama Siswa'),

           
            Hidden::make('siswa_id')
                ->default(fn() => optional(Filament::auth()->user()->siswa)->id), 


            // Hidden::make('guru_id')->default(null), 

            TextInput::make('surah')
                    ->required(),

                TextInput::make('juz') 
                    ->required()
                    ->numeric(), 

                TextInput::make('ayat')
                    ->required(),

                Hidden::make('status')
                    ->default('disetor'),
            TextInput::make('created_at')
                ->label('Dibuat Tanggal')
                ,
            ]);
    }
}
