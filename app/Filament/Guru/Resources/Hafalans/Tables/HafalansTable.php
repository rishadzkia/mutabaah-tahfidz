<?php

namespace App\Filament\Guru\Resources\Hafalans\Tables;

use Filament\Actions\BulkActionGroup; 
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction; 
use Filament\Actions\ExportAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select; 
use Filament\Tables\Columns\TextColumn; 
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table; 

class HafalansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('siswa.user.name')
    ->label('Nama Siswa')
    ->sortable()
    
    ->searchable(),

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
                // TextColumn::make('status'),
            // ToggleColumn::make('is_siswa')
            //     ->label('Tandai Siswa')
            //     ->onColor('danger')
            //     ->offColor('success'),
                TextColumn::make('created_at')
                    ->date('d F Y')
                    ->sortable()
                    ->label('Tanggal Dibuat')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                 Filter::make('tanggal_setor')
                    ->label('Filter Tanggal')
                    ->form([
                        DatePicker::make('date_from')
                            ->label('Dari Tanggal'),
                        DatePicker::make('date_until')
                            ->label('Sampai Tanggal'),
                    ])
                    ->query(function ( $query, array $data){
                        return $query 

                            ->when(
                                $data['date_from'],
                                fn( $query, $date)=> $query->whereDate('created_at', '>=', $date),
                            )

                            ->when(
                                $data['date_until'],
                                fn($query, $date) => $query->whereDate('created_at', '<=', $date),
                            );
                    }),


                Filter::make('bulan')
                    ->form([
                        Select::make('selected_month')
                            ->options([
                                '1' => 'Januari', 
                                '2' => 'Februari',
                                '3' => 'Maret',
                                '4' => 'April',
                                '5' => 'Mei',
                                '6' => 'Juni',
                                '7' => 'Juli',
                                '8' => 'Agustus',
                                '9' => 'September',
                                '10' => 'Oktober',
                                '11' => 'November',
                                '12' => 'Desember',
                            ])
                            ->label('Pilih Bulan')
                            ->placeholder('Semua Bulan'),
                    ])
                    ->query(function ($query, $data) {
                        return $query
                            ->when(
                                $data['selected_month'],
                                fn($query, $month) => $query->whereMonth('created_at', $month),
                            );
                    })
            ])
            ->recordActions([
                // EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
           
    }
}
