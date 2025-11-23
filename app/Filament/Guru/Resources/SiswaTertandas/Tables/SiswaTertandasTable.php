<?php

namespace App\Filament\Guru\Resources\SiswaTertandas\Tables;


use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class SiswaTertandasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
        
            TextColumn::make('siswa.user.name')
                ->label('Nama Siswa')
                ->sortable()
                ->searchable(),

            TextColumn::make('siswa.kelas')
                ->label('Kelas'),

            TextColumn::make('surah')->label('Surah'),
            TextColumn::make('ayat')->label('Ayat'),
            TextColumn::make('status')->label('Status'),

            // ToggleColumn::make('is_siswa')
            //     ->label('Ditandai?'),

            ]);
            // ->query(fn($query) => $query->where('is_siswa', true));
    }
}
