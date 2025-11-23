<?php

namespace App\Livewire\Guru;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('components.layouts.base')]
    public function render()
    {
        return view('livewire.guru.dashboard');
    } 
    

}
