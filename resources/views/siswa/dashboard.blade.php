<h2>Halo {{ Auth::user()->name }}, Selamat Datang di Dashboard Siswa!</h2>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
