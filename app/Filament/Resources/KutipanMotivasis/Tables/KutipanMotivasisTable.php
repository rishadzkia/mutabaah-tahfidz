<?php

namespace App\Filament\Resources\KutipanMotivasis\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KutipanMotivasisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('user.name')
              
                ->sortable(),
                ImageColumn::make('image_url'),
                TextColumn::make('sumber')
                    ->searchable(),
                TextColumn::make('teks_kutipan')
                    ->searchable(),
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
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
