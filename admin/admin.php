<?php
session_start();

if(empty($_SESSION['id_petugas'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index2.php');
    </script>";
}
if($_SESSION['level']!='admin'){
    echo"<script>
    alert('Maaf Anda Bukan Admin');
    window.location.assign('../index2.php');
    </script>";
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Aplikasi Pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
       
    <h3>Aplikasi Pembayaran SPP.</h3>
    <div class="alert alert-info">
        Anda Login Sebagai <b>Administrator</b> Aplikasi Pembayaran SPP.
    </div>
    <a href="admin.php" class="btn btn-success">Administrator</a>
    <a href="admin.php?url=spp" class="btn btn-success">SPP</a>
    <a href="admin.php?url=kelas" class="btn btn-success">Kelas</a>
    <a href="admin.php?url=siswa" class="btn btn-success">Siswa</a>
    <a href="admin.php?url=petugas" class="btn btn-success">Petugas</a>
    <a href="admin.php?url=pembayaran" class="btn btn-success">Pembayaran</a>
    <a href="admin.php?url=laporan" class="btn btn-success">Laporan</a>
    <a href="admin.php?url=logout" class="btn btn-success">Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <!-- isi web -->
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo"<h4>Selamat Datang Di Halaman Administrator.</h4>";
                echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah.";
            }else{
                include $file.'.php';
            }
            ?>
        </div>
    </div>

    </div>
    
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>