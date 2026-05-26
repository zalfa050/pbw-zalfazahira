<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Tambah Mahasiswa</h2>

    <form action="/mahasiswa/store" method="POST">
        @csrf

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control">
        </div>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>

        <div class="mb-3">
            <label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control">
        </div>

        <div class="mb-3">
            <label>Dosen</label>
            <select name="dosen_id" class="form-control">
                @foreach($dosen as $d)
                <option value="{{ $d->id }}">{{ $d->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

</body>
</html>