<?php

namespace App\Filament\Resources\Hafalans\Pages;

use App\Filament\Resources\Hafalans\HafalanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHafalans extends ListRecords
{
    protected static string $resource = HafalanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
