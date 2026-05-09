<?php
include '../koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Mahasiswa</title>
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
    color: #ffffff;
    font-weight: bold;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
    margin-bottom: 20px;
}

/* Semua tombol */
.btn {
    border-radius: 10px;
    font-weight: bold;
    padding: 6px 14px;
    border: none;
}

/* Tambah Data */
.btn-primary {
    background-color: #3b82f6 !important;
    color: white !important;
}

/* Kembali */
.btn-secondary {
    background-color: #64748b !important;
    color: white !important;
}

/* Edit (biru) */
.btn-warning {
    background-color: #2563eb !important;
    color: white !important;
}

/* Hapus (merah) */
.btn-danger {
    background-color: #ef4444 !important;
    color: white !important;
}

/* Tabel transparan */
.table {
    background: rgba(255, 255, 255, 0.25) !important;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-collapse: collapse;
    border: 4px double rgba(255, 255, 255, 0.85); /* garis double */
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 12px 30px rgba(0,0,0,0.20);
    color: #0f172a;
    font-weight: bold;
}

/* Header tabel */
.table th {
    background: rgba(59, 130, 246, 0.80) !important; /* biru lembut */
    color: white;
    text-align: center;
    padding: 14px;
    border: 3px double rgba(255, 255, 255, 0.85);
    font-weight: bold;
}

/* Isi tabel */
.table td {
    background: rgba(255, 255, 255, 0.18) !important;
    border: 3px double rgba(255, 255, 255, 0.75);
    padding: 12px;
    vertical-align: middle;
    font-weight: bold;
}

/* Hover */
.table tbody tr:hover td {
    background: rgba(255, 255, 255, 0.30) !important;
    transition: 0.3s;
}

/* Container */
.container {
    margin-top: 50px;
}
</style>
</head>
<body>

<div class="container mt-5">

    <h2>Data Nilai Mahasiswa</h2>

    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
    <a href="../menu.php" class="btn btn-secondary mb-3">Kembali ke Menu</a>

    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Semester</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nim']; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['semester']; ?></td>
            <td><?= $d['matakuliah']; ?></td>
            <td><?= $d['nilai']; ?></td>
            <td>
                <a href="edit.php?id=<?= $d['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="hapus.php?id=<?= $d['id']; ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                   Hapus
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>