<?php
$host = "8.215.10.98";
$user = "root";
$pass = "j62MxN9kVSh78bvTaI1QE3wqOe4f0C5t";
$name = "weberika";
$port = 31657; // ⬅️ tambahkan ini

$koneksi = mysqli_connect($host, $user, $pass, $name, $port);

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
