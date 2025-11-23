<?php

namespace App\Livewire\Siswa;

use Livewire\Component;
use App\Models\Hafalan;

class InputHafalan extends Component
{
    public $hafalan;

    public function mount()
    {
        $this->hafalan = Hafalan::all();
    }

    public function render()
    {
        return view('livewire.siswa.input-hafalan');
    }
}
