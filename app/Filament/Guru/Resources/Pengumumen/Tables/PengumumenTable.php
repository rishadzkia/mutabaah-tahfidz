<?php

namespace App\Filament\Guru\Resources\Pengumumen\Tables;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Tables\Table;

class PengumumenTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('guru.user.name')
                    ->label('Nama Guru')
                    ->limit(50) 
                    ->searchable()
                    ->formatStateUsing(function (string $state): string {
                        
                        return 'Guru ' . $state;
                    }),
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul Pengumuman')
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('isi')
                    ->label('Isi Pengumuman')
                    ->limit(50)
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime('d M Y'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
