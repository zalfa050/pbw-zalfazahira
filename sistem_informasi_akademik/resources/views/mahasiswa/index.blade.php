<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Data Mahasiswa</h2>
    <a href="/mahasiswa/create" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

    <table class="table table-bordered">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Dosen</th>
        </tr>

        @foreach($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->dosen->nama ?? '-' }}</td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>