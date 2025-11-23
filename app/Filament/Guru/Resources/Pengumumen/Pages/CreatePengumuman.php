<?php

namespace App\Filament\Guru\Resources\Pengumumen\Pages;

use App\Filament\Guru\Resources\Pengumumen\PengumumanResource;
use Filament\Facades\Filament;
use Filament\Resources\Pages\CreateRecord;

class CreatePengumuman extends CreateRecord
{
    protected static string $resource = PengumumanResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['guru_id'] = Filament::auth()->user()->guru->id;
        return $data;
    }
}
