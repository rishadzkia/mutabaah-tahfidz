<?php

namespace App\Filament\Guru\Resources\KomentarPengumumen\Tables;

use App\Filament\Guru\Resources\Gurus\Pages\CreateGuru;
use App\Filament\Guru\Resources\KomentarPengumumen\Pages\CreateKomentarPengumuman;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;  
use Filament\Actions\DeleteBulkAction; 
use Filament\Actions\EditAction; 
use Filament\Tables\Columns\TextColumn; 
use Filament\Tables\Table; 

class KomentarPengumumenTable 
{
    public static function configure(Table $table): Table 
    {
        return $table 
            ->columns([ 
                TextColumn::make('judul')
                    ->numeric() 
                    ->sortable(),
                TextColumn::make('komentar')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('siswa.user.name') 
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([ 
            Action::make('buatKomentar')
                ->label('Tambah Komentar')
                ->icon('heroicon-o-plus')
                ->url(fn($record) => CreateKomentarPengumuman::getUrl([
                    'pengumuman_id' => $record->id, // kalau mau passing ID
                ])),            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
