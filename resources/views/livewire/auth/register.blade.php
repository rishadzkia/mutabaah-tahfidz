<div class="login-box">
    <h2>Register</h2>

    @if (session('success'))
        <div style="color: green; margin-bottom: 10px;"> 
            {{ session('success') }} 
        </div> 
    @endif 

    <form wire:submit.prevent="register">

        <input type="text" wire:model="name" placeholder="Nama lengkap" required>

        <input type="email" wire:model="email" placeholder="Email" required>

        <input type="password" wire:model="password" placeholder="Password" required>

        <input type="password" wire:model="password_confirmation" placeholder="Konfirmasi Password" required>

        <button type="submit">Daftar</button>
    </form>

    <p style="margin-top: 10px; text-align:center;">
        Sudah punya akun?
        <a href="/login">Login di sini</a>
    </p>
</div>
