<?php

namespace App\Filament\Resources\Murottals\Pages;

use App\Filament\Resources\Murottals\MurottalResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMurottal extends EditRecord
{
    protected static string $resource = MurottalResource::class;

    protected function getHeaderActions(): array
    {
        return [ 
            DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
