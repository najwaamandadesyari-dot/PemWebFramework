<header class="navbar">
    <nav class="navbar-inner">
        <div class="brand">My Profile</div>
        <div class="nav-links">
            <a href="/beranda" class="{{ request()->path() === 'beranda' ? 'active' : '' }}">Beranda</a>
            <a href="/data-diri" class="{{ request()->path() === 'data-diri' ? 'active' : '' }}">Data Diri</a>
            <a href="/aktivitas" class="{{ request()->path() === 'aktivitas' ? 'active' : '' }}">Aktivitas</a>
            <a href="/kontak" class="{{ request()->path() === 'kontak' ? 'active' : '' }}">Kontak</a>
        </div>
    </nav>
</header>
