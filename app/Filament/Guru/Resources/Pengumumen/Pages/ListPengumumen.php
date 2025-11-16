<?php

namespace App\Filament\Guru\Resources\Pengumumen\Pages;

use App\Filament\Guru\Resources\Pengumumen\PengumumanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPengumumen extends ListRecords
{
    protected static string $resource = PengumumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
