<?php

namespace App\Filament\Resources\KutipanMotivasis;

use App\Filament\Resources\KutipanMotivasis\Pages\CreateKutipanMotivasi;
use App\Filament\Resources\KutipanMotivasis\Pages\EditKutipanMotivasi;
use App\Filament\Resources\KutipanMotivasis\Pages\ListKutipanMotivasis;
use App\Filament\Resources\KutipanMotivasis\Schemas\KutipanMotivasiForm;
use App\Filament\Resources\KutipanMotivasis\Tables\KutipanMotivasisTable;
use App\Models\KutipanMotivasi;
use BackedEnum;
use Filament\Resources\Resource; 
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KutipanMotivasiResource extends Resource
{
    protected static ?string $model = KutipanMotivasi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleLeftRight;

    protected static ?string $recordTitleAttribute = 'sumber';
  
    protected static ?string $modelLabel = 'Kutipan Motivasi';
    protected static ?string $pluralModelLabel = 'Kutipan Motivasi';

    public static function form(Schema $schema): Schema
    {
        return KutipanMotivasiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KutipanMotivasisTable::configure($table);
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
            'index' => ListKutipanMotivasis::route('/'),
            'create' => CreateKutipanMotivasi::route('/create'),
            'edit' => EditKutipanMotivasi::route('/{record}/edit'),
        ];
    }
}
