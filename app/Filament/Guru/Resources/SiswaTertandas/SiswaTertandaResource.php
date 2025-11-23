<?php

namespace App\Filament\Guru\Resources\SiswaTertandas;

use App\Filament\Guru\Resources\SiswaTertandas\Pages\ListSiswaTertandas;
use App\Filament\Guru\Resources\SiswaTertandas\Schemas\SiswaTertandaForm;
use App\Filament\Guru\Resources\SiswaTertandas\Tables\SiswaTertandasTable;
use App\Models\Hafalan;
use App\Models\SiswaTertanda;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SiswaTertandaResource extends Resource
{
    
    protected static ?string $model = \App\Models\Hafalan::class;


    
    protected static ?string $navigationLabel = 'Siswa Tertanda';
    protected static string | \UnitEnum | null $navigationGroup = 'Hafalan';
    protected static string | \BackedEnum | null $navigationIcon = Heroicon::OutlinedTag;


    protected static ?string $recordTitleAttribute = 'ayat';

    public static function form(Schema $schema): Schema
    { 
        return SiswaTertandaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SiswaTertandasTable::configure($table)
         ->query(fn ($query) => $query->with(['siswa.user']));
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSiswaTertandas::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit($record): bool
    {
        return false;
    }
}
