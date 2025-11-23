<?php

namespace App\Filament\Guru\Resources\SiswaTertandas\Pages;

use App\Filament\Guru\Resources\SiswaTertandas\SiswaTertandaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSiswaTertanda extends EditRecord
{
    protected static string $resource = SiswaTertandaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
