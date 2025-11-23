<?php

namespace App\Filament\Guru\Resources\ResponseHafalans\Pages;

use App\Filament\Guru\Resources\ResponseHafalans\ResponseHafalanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditResponseHafalan extends EditRecord
{
    protected static string $resource = ResponseHafalanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
