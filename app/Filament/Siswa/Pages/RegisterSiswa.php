<?php

namespace App\Filament\Siswa\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;

class RegisterSiswa extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected string $view = 'filament.siswa.pages.register-siswa';


    // Menyimpan data sementara untuk form 
    public $name;
    public $email;
    public $password;
    public $kelas;
    public $angkatan;
    public $foto;

    public function form()
    {
        return $this->form->schema([
                TextInput::make('name')->label('Nama')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('password')->password()->required(),
                TextInput::make('kelas')->required(),
                TextInput::make('angkatan')->numeric()->required(),
                FileUpload::make('foto')->label('Foto Siswa')->image()->nullable(),
            ]);
    }

    public function submit()
    {
        $data = $this->form->getState();

        // Buat user baru
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'siswa', // otomatis siswa
        ]);

        // Buat siswa terkait
        Siswa::create([
            'user_id' => $user->id,
            'kelas' => $data['kelas'],
            'angkatan' => $data['angkatan'],
            'foto' => $data['foto'] ?? null,
            'is_siswa' => true,
        ]);

        session()->flash('success', 'Registrasi berhasil! Silakan login.');
        return redirect()->route('filament.auth.login', ['panel' => 'siswa']);
    }
}
