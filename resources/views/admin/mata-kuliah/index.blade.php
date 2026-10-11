<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mata Kuliah</title>
</head>
<body>
    <main>
        <h1>Daftar Mata Kuliah</h1>

        @if (session('success'))
            <p role="status">{{ session('success') }}</p>
        @endif

        <p>
            <a href="{{ route('admin.mata-kuliah.create') }}">Tambah Mata Kuliah</a>
        </p>

        @if ($mataKuliahs->isEmpty())
            <p>Belum ada data mata kuliah.</p>
        @else
            <table border="1" cellpadding="5" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mataKuliahs as $mataKuliah)
                        <tr>
                            <td>{{ $mataKuliah->kode }}</td>
                            <td>{{ $mataKuliah->nama }}</td>
                            <td>{{ $mataKuliah->sks }}</td>
                            <td>{{ $mataKuliah->semester }}</td>
                            <td>{{ $mataKuliah->aktif ? 'Aktif' : 'Tidak aktif' }}</td>
                            <td>
                                <a href="{{ route('admin.mata-kuliah.show', $mataKuliah) }}">Detail</a>
                                <a href="{{ route('admin.mata-kuliah.edit', $mataKuliah) }}">Edit</a>
                                <form action="{{ route('admin.mata-kuliah.destroy', $mataKuliah) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus mata kuliah ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </main>
</body>
</html>
