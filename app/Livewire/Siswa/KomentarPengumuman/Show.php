<?php

namespace App\Livewire\Siswa\KomentarPengumuman;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
   #[Layout('components.layouts.base')]
   public $komentar;
    public function render()
    {
        return view('livewire.siswa.komentar-pengumuman.show');
    }

    public function mount(){
        'siswa_id';
        'pengumuman_id';
    }
}
