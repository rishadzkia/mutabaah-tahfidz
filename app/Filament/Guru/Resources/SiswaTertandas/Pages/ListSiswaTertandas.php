<?php

namespace App\Filament\Guru\Resources\SiswaTertandas\Pages;

use App\Filament\Guru\Resources\SiswaTertandas\SiswaTertandaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSiswaTertandas extends ListRecords
{
    protected static string $resource = SiswaTertandaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
