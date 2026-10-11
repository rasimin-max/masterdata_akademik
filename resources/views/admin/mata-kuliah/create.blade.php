<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <main>
        <h1>Tambah Mata Kuliah</h1>

        @if ($errors->any())
            <div role="alert">
                <p>Periksa kembali data yang dimasukkan:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.mata-kuliah.store') }}" method="POST">
            @csrf

            <p>
                <label for="kode">Kode Mata Kuliah</label><br>
                <input id="kode" name="kode" type="text" maxlength="20" value="{{ old('kode') }}" required>
            </p>
            <p>
                <label for="nama">Nama Mata Kuliah</label><br>
                <input id="nama" name="nama" type="text" maxlength="100" value="{{ old('nama') }}" required>
            </p>
            <p>
                <label for="sks">Jumlah SKS</label><br>
                <input id="sks" name="sks" type="number" min="1" max="6" value="{{ old('sks') }}" required>
            </p>
            <p>
                <label for="semester">Semester</label><br>
                <input id="semester" name="semester" type="number" min="1" max="14" value="{{ old('semester') }}" required>
            </p>

            <button type="submit">Simpan</button>
            <a href="{{ route('admin.mata-kuliah.index') }}">Kembali</a>
        </form>
    </main>
</body>
</html>
