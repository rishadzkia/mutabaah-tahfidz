<?php

namespace App\Filament\Guru\Resources\KomentarPengumumen\Pages;

use App\Filament\Guru\Resources\KomentarPengumumen\KomentarPengumumanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKomentarPengumuman extends EditRecord
{
    protected static string $resource = KomentarPengumumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
