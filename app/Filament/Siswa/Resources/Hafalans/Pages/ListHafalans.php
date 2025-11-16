<?php

namespace App\Filament\Siswa\Resources\Hafalans\Pages;

use App\Filament\Siswa\Resources\Hafalans\HafalanResource;
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
