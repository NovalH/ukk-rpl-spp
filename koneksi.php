<?php
$koneksi = mysqli_connect('localhost','root','','projectspp');
if(!$koneksi){
    echo"koneksi anda gagal";
}