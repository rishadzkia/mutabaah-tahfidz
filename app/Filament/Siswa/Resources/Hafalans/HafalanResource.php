<?php

namespace App\Filament\Siswa\Resources\Hafalans;

use App\Filament\Siswa\Resources\Hafalans\Pages\CreateHafalan;
use App\Filament\Siswa\Resources\Hafalans\Pages\EditHafalan;
use App\Filament\Siswa\Resources\Hafalans\Pages\ListHafalans;
use App\Filament\Siswa\Resources\Hafalans\Schemas\HafalanForm;
use App\Filament\Siswa\Resources\Hafalans\Tables\HafalansTable;
use App\Models\Hafalan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HafalanResource extends Resource
{
    protected static ?string $model = Hafalan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentPlus;

    protected static ?string $recordTitleAttribute = 'juz';
    protected static ?string $modelLabel = 'Input Hafalan';
    protected static ?string $pluralModelLabel = 'Input Hafalan';

    public static function form(Schema $schema): Schema
    {
        return HafalanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HafalansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHafalans::route('/'),
            'create' => CreateHafalan::route('/create'),
            'edit' => EditHafalan::route('/{record}/edit'),
        ];
    }
}
