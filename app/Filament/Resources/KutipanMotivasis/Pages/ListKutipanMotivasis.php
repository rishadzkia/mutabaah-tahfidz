<?php

namespace App\Filament\Resources\KutipanMotivasis\Pages;

use App\Filament\Resources\KutipanMotivasis\KutipanMotivasiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKutipanMotivasis extends ListRecords
{
    protected static string $resource = KutipanMotivasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
