<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Menu</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 
<style>
body {
    background: url('assets/background.jpg') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.card {
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 4px double rgba(255, 255, 255, 0.85);
    border-radius: 25px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.20);
}

.card-header {
    background: rgba(59, 130, 246, 0.75);
    color: white;
    border-bottom: 3px double rgba(255, 255, 255, 0.85);
    font-weight: bold;
    text-align: center;
}

.card-body {
    padding: 30px;
    font-weight: bold;
}
h2, h3 {
    color: white;
    font-weight: bold;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
}
label {
    font-weight: bold;
    color: #0f172a;
}
.form-control {
    border-radius: 10px;
    border: 2px solid rgba(59, 130, 246, 0.4);
}
.btn {
    border-radius: 10px;
    font-weight: bold;
    padding: 8px 16px;
}
.btn-primary {
    background-color: #3b82f6 !important;
    border: none;
}
.btn-success {
    background-color: #2563eb !important;
    border: none;
}
.btn-danger {
    background-color: #ef4444 !important;
    border: none;
}
</style>

</head>

<body>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h2>Selamat Datang Admin</h2>

            <hr>

            <a href="siswa/data.php"
            class="btn btn-success">

            Data Siswa

            </a>

            <a href="logout.php"
            class="btn btn-danger">

            Logout

            </a>

        </div>

    </div>

</div>

</body>
</html>