<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Manajemen Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <h1>Manajemen Data Buku</h1>
        <div class="nav">
            <ul>
                <li><a href="/kategori">kategori</a></li>
                <li><a href="/penerbit">penerbit</a></li>
                <li><a href="/buku">buku</a></li>
            </ul>
        </div>
        <h3>Kategori</h3>
        <a href="{{ route('kategori.create') }}" class="tombol">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allkategori as $key => $r)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $r->nama_kategori }}</td>
                        <td>
                            <form action="{{ route('kategori.destroy', $r->id) }}" method="post">
                                <a href="{{ route('kategori.show', $r->id) }}" class="tombol">detail</a>
                                <a href="{{ route('kategori.edit', $r->id) }}" class="tombol">edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="tombol">hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="footer">&copy; 2025 Ardiann</div>
    </div>
</body>

</html>
