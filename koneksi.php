<?php
$host = "localhost"; // saat di hosting, ini bisa diganti IP/host remote
$user = "root";
$password = "";
$dbname = "coffeeshop"; // ini HARUS sesuai dengan nama database di phpMyAdmin

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
