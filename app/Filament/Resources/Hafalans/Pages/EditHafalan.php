<?php

namespace App\Filament\Resources\Hafalans\Pages;

use App\Filament\Resources\Hafalans\HafalanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHafalan extends EditRecord
{
    protected static string $resource = HafalanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
