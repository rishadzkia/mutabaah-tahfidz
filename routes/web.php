<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Guru\Dashboard as GuruDashboard;
use App\Livewire\Guru\Hafalan\Show;
use App\Livewire\Guru\Pengumuman\Create;
use App\Livewire\Guru\Pengumuman\Update;
use App\Livewire\Guru\Pengumuman\Show as PengumumanShow;
use App\Livewire\Guru\ResponseHafalan\Show as ResponseHafalanShow;
use App\Livewire\Guru\SiswaTertanda\Show as SiswaTertandaShow;
use App\Livewire\Login;

// Dashboard umum
Route::get('/dashboard', Dashboard::class);

// Siswa
Route::prefix('siswa')->middleware(['auth', 'siswa'])->group(function () {
    Route::get('dashboard', function () {
        return view('livewire.siswa.dashboard');
    })->name('siswa.dashboard');
});

// Guru
Route::prefix('guru')->middleware(['auth', 'guru'])->group(function () {
    Route::get('dashboard', GuruDashboard::class)->name('guru.dashboard');

    Route::get('hafalan', Show::class)->name('guru.hafalan');
    Route::get('responseHafalan', ResponseHafalanShow::class)->name('guru.responseHafalan');
    Route::get('siswaTertanda', SiswaTertandaShow::class)->name('guru.siswaTertanda');

    Route::get('pengumuman', PengumumanShow::class)->name('guru.pengumuman');

    
    Route::get('createPengumuman', Create::class)->name('guru.create.pengumuman');
    Route::get('updatePengumuman/{id}', \App\Livewire\Guru\Pengumuman\Update::class)->name('guru.update.pengumuman');

    

});

// Login
Route::get('/login', Login::class)->name('login');
