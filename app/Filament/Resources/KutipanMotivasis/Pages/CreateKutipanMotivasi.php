<?php

namespace App\Filament\Resources\KutipanMotivasis\Pages;

use App\Filament\Resources\KutipanMotivasis\KutipanMotivasiResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKutipanMotivasi extends CreateRecord
{
    protected static string $resource = KutipanMotivasiResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
