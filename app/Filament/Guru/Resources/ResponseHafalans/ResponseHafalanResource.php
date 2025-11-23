<?php

namespace App\Filament\Guru\Resources\ResponseHafalans;

use App\Filament\Guru\Resources\ResponseHafalans\Pages\CreateResponseHafalan;
use App\Filament\Guru\Resources\ResponseHafalans\Pages\EditResponseHafalan;
use App\Filament\Guru\Resources\ResponseHafalans\Pages\ListResponseHafalans;
use App\Filament\Guru\Resources\ResponseHafalans\Schemas\ResponseHafalanForm;
use App\Filament\Guru\Resources\ResponseHafalans\Tables\ResponseHafalansTable;
use App\Models\ResponseHafalan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ResponseHafalanResource extends Resource
{
    protected static ?string $model = ResponseHafalan::class;
    protected static ?string $modelLabel = "Response Hafalan";
    protected static ?string $pluralmoLabel = "Response Hafalan";

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'is_marked';

    public static function form(Schema $schema): Schema
    {
        return ResponseHafalanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ResponseHafalansTable::configure($table);
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
            'index' => ListResponseHafalans::route('/'),
            'create' => CreateResponseHafalan::route('/create'),
            'edit' => EditResponseHafalan::route('/{record}/edit'),
        ];
    }
}
