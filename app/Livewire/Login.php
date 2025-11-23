<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;
    public function login()
    {
        $this->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();

            // Arahkan sesuai role
            if (Auth::user()->role === 'guru') {
                return redirect()->route('guru.dashboard');
            } elseif (Auth::user()->role === 'siswa') {
                return redirect()->route('siswa.dashboard');
            }
        }

        $this->addError('email', 'Email atau password salah.');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
