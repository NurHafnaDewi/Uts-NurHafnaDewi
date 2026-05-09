<?php
include '../koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$semester = $_POST['semester'];
$matakuliah = $_POST['matakuliah'];
$nilai = $_POST['nilai'];

mysqli_query($conn, "INSERT INTO siswa VALUES (
    '',
    '$nim',
    '$nama',
    '$semester',
    '$matakuliah',
    '$nilai'
)");

header("location:data.php");
?>