<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
body {
    background: url('../assets/background.jpg') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Judul */
h2 {
    color: #4a2c7a;
    font-weight: 700;
    text-shadow: 1px 1px 4px rgba(255,255,255,0.7);
    margin-bottom: 20px;
}

/* Tombol */
.btn {
    border-radius: 12px;
    font-weight: 600;
    padding: 8px 16px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}

/* Tabel transparan */
.table {
    background: rgba(255, 255, 255, 0.88);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.20);
}

/* Header tabel */
.table th {
    background: linear-gradient(135deg, #7b2cbf, #9d4edd);
    color: white;
    text-align: center;
    vertical-align: middle;
    border: none;
    padding: 14px;
    font-size: 15px;
}

/* Isi tabel */
.table td {
    vertical-align: middle;
    padding: 12px;
    border-color: rgba(0,0,0,0.08);
}

/* Efek hover */
.table tbody tr:hover {
    background: rgba(123, 44, 191, 0.08);
    transition: 0.3s;
}

/* Container utama */
.container {
    margin-top: 50px;
}

/* Card transparan */
.card {
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: none;
    border-radius: 24px;
    box-shadow: 0 12px 35px rgba(0,0,0,0.20);
}

/* Jika ada card-body */
.card-body {
    padding: 30px;
}
</style>
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h2>Tambah Data Mahasiswa</h2>

            <form action="simpan.php" method="POST">

                <div class="mb-3">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Semester</label>
                    <input type="text" name="semester" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Mata Kuliah</label>
                    <input type="text" name="matakuliah" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Nilai</label>
                    <input type="number" name="nilai" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="data.php" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>