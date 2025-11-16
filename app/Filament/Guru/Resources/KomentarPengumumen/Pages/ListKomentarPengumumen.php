<?php

namespace App\Filament\Guru\Resources\KomentarPengumumen\Pages;

use App\Filament\Guru\Resources\KomentarPengumumen\KomentarPengumumanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKomentarPengumumen extends ListRecords
{
    protected static string $resource = KomentarPengumumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
