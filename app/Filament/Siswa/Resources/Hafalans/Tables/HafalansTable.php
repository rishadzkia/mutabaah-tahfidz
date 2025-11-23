<?php

namespace App\Filament\Siswa\Resources\Hafalans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use GuzzleHttp\Psr7\Query;
use Illuminate\Database\Eloquent\Builder;

class HafalansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('siswa.user.name')
                    ->label('Nama Siswa')
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                // TextColumn::make('guru_id')
                //     ->numeric()
                //     ->sortable(),
                TextColumn::make('surah')
                    ->searchable(),
                TextColumn::make('juz')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('ayat')
                    ->searchable(),
                TextColumn::make('status'),
                TextColumn::make('created_at')
                    ->label('Waktu Dibuat')
                    ->date('d F Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->filters([
              

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
