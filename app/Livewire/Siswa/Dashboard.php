<?php

namespace App\Livewire\Siswa;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('components.layouts.base')]
    public function render()
    {
        return view('livewire.siswa.dashboard');
    }
}
