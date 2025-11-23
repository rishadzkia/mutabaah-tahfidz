<?php

namespace App\Filament\Guru\Resources\ResponseHafalans\Pages;

use App\Filament\Guru\Resources\ResponseHafalans\ResponseHafalanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListResponseHafalans extends ListRecords
{
    protected static string $resource = ResponseHafalanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
