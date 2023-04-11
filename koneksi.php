<?php
$servername = "localhost"; // nama server
$username = "root"; // nama pengguna database
$password = ""; // password pengguna database
$dbname = "nama_database"; // nama database

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil";
?>