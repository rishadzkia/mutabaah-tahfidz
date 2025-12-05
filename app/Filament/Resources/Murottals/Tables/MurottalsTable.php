<?php

namespace App\Filament\Resources\Murottals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Columns\HtmlColumn;
use Filament\Tables\Table;

class MurottalsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('qari_name')
                    ->searchable(),
                TextColumn::make('surah')
                    ->searchable(),

            

TextColumn::make('file_url')
    ->label('Audio')
    ->html() // ini memungkinkan return HTML mentah
    ->formatStateUsing(fn ($state, $record) => $state
        ? '<audio controls style="width:180px;">
               <source src="' . asset('storage/audio/murottal/' . $state) . '" type="audio/mpeg">
           </audio>'
        : '<span class="text-gray-500">Tidak ada audio</span>'
            ),
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
                DeleteAction::make(),
                ViewAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
