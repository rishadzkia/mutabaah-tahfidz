<?php

namespace App\Filament\Siswa\Resources\KomentarPengumumen;

use App\Filament\Siswa\Resources\KomentarPengumumen\Pages\CreateKomentarPengumuman;
use App\Filament\Siswa\Resources\KomentarPengumumen\Pages\EditKomentarPengumuman;
use App\Filament\Siswa\Resources\KomentarPengumumen\Pages\ListKomentarPengumumen;
use App\Filament\Siswa\Resources\KomentarPengumumen\Schemas\KomentarPengumumanForm;
use App\Filament\Siswa\Resources\KomentarPengumumen\Tables\KomentarPengumumenTable;
use App\Models\KomentarPengumuman;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KomentarPengumumanResource extends Resource
{
    protected static ?string $model = KomentarPengumuman::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'komentar';
    protected static ?string $modelLabel = 'Beri Komentar Guru';
    protected static ?string $pluralModelLabel = 'Beri Komentar Guru';

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
