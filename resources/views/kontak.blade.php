
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $judul }}</title>
</head>
<body>
    <header>
        <h1>CampusInfo Portal</h1>
        <nav aria-label="Navigasi Utama">
            <a href="{{ route('home') }}">Beranda</a> |
            <a href="{{ route('prodi') }}">Program Studi</a> |
            <a href="{{ route('kontak') }}">Kontak</a>
        </nav>
    </header>
    <main>
        <section>
            <h2>Hubungi Kami</h2>
            <address>
                Kampus STTI NIIT I-Tech<br>
                Email: info@niit-itech.ac.id
            </address>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 STTI NIIT I-Tech</p>
    </footer>
</body>
</html>