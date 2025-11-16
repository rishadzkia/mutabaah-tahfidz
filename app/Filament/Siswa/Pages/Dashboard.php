<?php

namespace App\Filament\Siswa\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected string $view = 'filament.siswa.pages.dashboard';

    protected function getWidgets(): array
    {
        return [
            \App\Filament\Siswa\Widgets\BigDashboardCard::class,
        ];
    }
}
