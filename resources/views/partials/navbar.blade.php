<nav class="navbar navbar-expand-lg navbar-dark bg-primary">




    <div class="container">
        <a href="route{{ route ('home') }}" class="navbar-brand">Fasilitas Kota</a>
        <div class="navbar-nav">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
            <a href="{{ route('profil') }}" class="nav-link">Profil</a>
            <a href="{{ route('laporan') }}" class="nav-link">Laporan</a>
        </div>
    </div>

    @guest
    <a href="{{ route('login') }}" class="btn btn-primary btn-sm me-5">Log In</a>
    @endguest

    @auth

        <span class="me-2">Halo, {{ auth()->user()->name }}</span>
        <form method="POST" class="d-inline" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger btn-sm">Log Out</button>
        </form>
    @endauth

</nav>


