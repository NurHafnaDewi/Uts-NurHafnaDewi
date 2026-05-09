<?php
include '../koneksi.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$semester = $_POST['semester'];
$matakuliah = $_POST['matakuliah'];
$nilai = $_POST['nilai'];

mysqli_query($conn, "UPDATE siswa SET
    nim='$nim',
    nama='$nama',
    semester='$semester',
    matakuliah='$matakuliah',
    nilai='$nilai'
WHERE id='$id'");

header("location:data.php");
?>