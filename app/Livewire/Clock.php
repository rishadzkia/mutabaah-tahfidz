<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Clock extends Component
{
    // optional: terima timezone dari parent
    public $timezone = 'Asia/Jakarta';
    public $format = 'H:i:s';

    public function mount($timezone = null, $format = null)
    {
        if ($timezone) $this->timezone = $timezone;
        if ($format) $this->format = $format;
    }

    public function render()
    {

        return view('livewire.clock');
    }


    public function refresh() {}
}
