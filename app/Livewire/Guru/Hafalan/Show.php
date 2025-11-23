<?php

namespace App\Livewire\Guru\Hafalan;

use App\Models\Hafalan;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;

class Show extends Component
{
    public $search = '';
    public $hafalan = [];

    #[Layout('components.layouts.base')]
    public function render()
    {
        $this->hafalan = Hafalan::with(['siswa.user'])
            ->whereHas('siswa.user', function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%');
            })
            ->get();

        return view('livewire.guru.hafalan.show', [
            'hafalan' => $this->hafalan
        ]);
    }

    public function mount()
    {

        $this->hafalan = Hafalan::with(['siswa.user'])->get();
    }

    public function exportPDF()
    {

        $data = Hafalan::with(['siswa.user'])
            ->whereHas('siswa.user', function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%');
            })
            ->get();

        $pdf = Pdf::loadView('livewire.guru.hafalan.pdf', [
            'hafalan' => $data
        ]);

        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, 'laporan-hafalan.pdf');
    }
}
