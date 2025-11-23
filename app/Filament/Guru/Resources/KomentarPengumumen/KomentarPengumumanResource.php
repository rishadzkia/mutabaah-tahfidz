<?php

namespace App\Filament\Guru\Resources\KomentarPengumumen;

use App\Filament\Guru\Resources\KomentarPengumumen\Pages\CreateKomentarPengumuman;
use App\Filament\Guru\Resources\KomentarPengumumen\Pages\EditKomentarPengumuman;
use App\Filament\Guru\Resources\KomentarPengumumen\Pages\ListKomentarPengumumen;
use App\Filament\Guru\Resources\KomentarPengumumen\Schemas\KomentarPengumumanForm;
use App\Filament\Guru\Resources\KomentarPengumumen\Tables\KomentarPengumumenTable;
use App\Models\KomentarPengumuman;
use App\Models\Pengumuman; 
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table; 

class KomentarPengumumanResource extends Resource
{
    protected static ?string $model = Pengumuman::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleLeftRight;

    protected static ?string $recordTitleAttribute = 'komentar';
    protected static ?string $modelLabel = 'Komentar Siswa';
    protected static ?string $pluralModelLabel = 'Komentar Siswa';

    public static function form(Schema $schema): Schema
    {
        return KomentarPengumumanForm::configure($schema);
        
    } 

    public static function table(Table $table): Table
    {
        return KomentarPengumumenTable::configure($table);
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
            'index' => ListKomentarPengumumen::route('/'),
            'create' => CreateKomentarPengumuman::route('/create'),
            'edit' => EditKomentarPengumuman::route('/{record}/edit'),
        ];
    }
}
