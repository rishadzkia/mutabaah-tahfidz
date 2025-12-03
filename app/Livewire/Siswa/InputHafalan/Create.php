<?php

namespace App\Livewire\Siswa\InputHafalan;

use App\Models\Hafalan;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component

{
    #[Layout('components.layouts.base')]
    public $name;
    public $siswa_id;
    public $surah;
    public $juz;
    public $ayat;

    public function render()
    {
        return view('livewire.siswa.input-hafalan.create');
    }

    public function mount()
    {
        $user = Auth::user();


        $this->name = $user->name;


        $this->siswa_id = $user->siswa->id ?? null;
    }

    public function create()
    {
        Hafalan::create([
            'siswa_id' => $this->siswa_id,
            'surah'   => $this->surah,
            'ayat'     => $this->ayat,
            'juz'     => $this->juz,

        ]);

        session()->flash('success', 'Data berhasil dikirim!');

        // Reset form
        return $this->redirect('hafalan', navigate: true);
    }
}
