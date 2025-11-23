<?php

namespace App\Filament\Guru\Resources\Pengumumen;

use App\Filament\Guru\Resources\Pengumumen\Pages\CreatePengumuman;
use App\Filament\Guru\Resources\Pengumumen\Pages\EditPengumuman;
use App\Filament\Guru\Resources\Pengumumen\Pages\ListPengumumen;
use App\Filament\Guru\Resources\Pengumumen\Schemas\PengumumanForm;
use App\Filament\Guru\Resources\Pengumumen\Tables\PengumumenTable;
use App\Models\Pengumuman;
use BackedEnum;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PengumumanResource extends Resource
{
    protected static ?string $model = Pengumuman::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMegaphone;

    protected static ?string $recordTitleAttribute = 'isi';
    protected static ?string $modelLabel = 'Pengumuman';
    protected static ?string $pluralModelLabel = 'Pengumuman';

    public static function form(Schema $schema): Schema
    {
        return PengumumanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PengumumenTable::configure($table);
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
            'index' => ListPengumumen::route('/'),
            'create' => CreatePengumuman::route('/create'),
            'edit' => EditPengumuman::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $user = Filament::auth()->user();

        if (!$user || !$user->guru) {
            return parent::getEloquentQuery()->whereRaw('1 = 0');
        }

        return parent::getEloquentQuery()
            ->where('guru_id', $user->guru->id);
    }
}
