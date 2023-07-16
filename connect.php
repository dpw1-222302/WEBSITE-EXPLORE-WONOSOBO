<?php
$host = 'localhost'; // Nama host database
$username = 'root'; // Username database
$password = ''; // Password database
$database = 'db_tubes_dpw'; // Nama database
// Buat koneksi
$conn = new mysqli($host, $username, $password, $database);
// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// Jika koneksi berhasil, dapatkan pesan sukses
// echo "Koneksi berhasil";
