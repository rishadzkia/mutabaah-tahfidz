<?php

namespace App\Filament\Resources\Murottals\Pages;

use App\Filament\Resources\Murottals\MurottalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMurottals extends ListRecords
{
    protected static string $resource = MurottalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
