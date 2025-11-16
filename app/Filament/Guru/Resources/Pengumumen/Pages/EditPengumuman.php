<?php

namespace App\Filament\Guru\Resources\Pengumumen\Pages;

use App\Filament\Guru\Resources\Pengumumen\PengumumanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPengumuman extends EditRecord
{
    protected static string $resource = PengumumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
