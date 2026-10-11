
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
            <h2>Daftar Program Studi</h2>
            <table border="1" cellpadding="5" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">Nama Prodi</th>
                        <th scope="col">Jenjang</th>
                        <th scope="col">Akreditasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prodiList as $prodi)
                    <tr>
                        <td>{{ $prodi['nama'] }}</td>
                        <td>{{ $prodi['jenjang'] }}</td>
                        <td>{{ $prodi['akreditasi'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 STTI NIIT I-Tech</p>
    </footer>
</body>
</html>