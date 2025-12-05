<?php

namespace App\Livewire\Siswa\KomentarPengumuman;

use App\Models\KomentarPengumuman;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
   #[Layout('components.layouts.base')]
   public $komentar;
   public function mount(){
         $this->komentar = KomentarPengumuman::all();
   }
    public function render()
    {
        return view('livewire.siswa.komentar-pengumuman.show');
    }

    
}
