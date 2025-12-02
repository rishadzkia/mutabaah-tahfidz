<?php

namespace App\Livewire\Guru\Pengumuman;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('components.layouts.base')]
    public $pengumuman;
    public function render()
    {
        return view('livewire.guru.pengumuman.show');
    }
    public function mount(){
        $this->pengumuman = Pengumuman::with([
            'guru.user',

        ])->get();
    }

    public function destroy(Request $request){
        $request->delete();
        return redirect()->route('guru.pengumuman')->with('success', 'Data berhasil dihapus');
    }
}
