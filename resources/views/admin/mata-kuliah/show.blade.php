<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <main>
        <h1>Detail Mata Kuliah</h1>

        <dl>
            <dt>Kode Mata Kuliah</dt>
            <dd>{{ $mataKuliah->kode }}</dd>

            <dt>Nama Mata Kuliah</dt>
            <dd>{{ $mataKuliah->nama }}</dd>

            <dt>Jumlah SKS</dt>
            <dd>{{ $mataKuliah->sks }}</dd>

            <dt>Semester</dt>
            <dd>{{ $mataKuliah->semester }}</dd>

            <dt>Status</dt>
            <dd>{{ $mataKuliah->aktif ? 'Aktif' : 'Tidak aktif' }}</dd>
        </dl>

        <p>
            <a href="{{ route('admin.mata-kuliah.edit', $mataKuliah) }}">Edit</a>
            <a href="{{ route('admin.mata-kuliah.index') }}">Kembali ke daftar</a>
        </p>
    </main>
</body>
</html>
