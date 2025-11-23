<?php

namespace App\Livewire\Guru\ResponseHafalan;

use App\Models\ResponseHafalan;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('components.layouts.base')]
    public $responseHafalan;
    public function render()
    {
        return view('livewire.guru.response-hafalan.show');
    }

    public function mount(){
       $this->responseHafalan = ResponseHafalan::with([
        'hafalan.siswa',
       
       ])->get();
    }
}
