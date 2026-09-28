<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="/css/portfolio.css">
</head>
<body>
    @include('layouts.header')

    <main class="page">
        <section class="hero">
            <div class="hero-box">
                <div class="profile-badge">Selamat Datang</div>
                <h1>Halo, saya Najwa Amanda Desyari</h1>
                <p>Saya adalah mahasiswa Teknik Informatika yang aktif dalam belajar, berorganisasi, dan mengembangkan kemampuan di bidang teknologi dan kreativitas.</p>
                <p>Di halaman ini Anda dapat melihat informasi tentang data diri, aktivitas, dan kontak saya.</p>
            </div>

            <aside class="profile-card">
                <img src="/images/photo2.jpg" alt="Foto Najwa" class="profile-photo">
            </aside>
        </section>

    </main>

    @include('layouts.footer')
</body>
</html>
