<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $nama_gunung = $_POST['nama_gunung'];
    $deskripsi_gunung = $_POST['deskripsi_gunung'];
    $kecamatan_gunung = $_POST['kecamatan_gunung'];
    $ketinggian_gunung = $_POST['ketinggian_gunung'];
    // memasukan data menggunakan query sql
    $query = "INSERT INTO tabel_gunung(nama_gunung, deskripsi_gunung, kecamatan_gunung, ketinggian_gunung) VALUES ('$nama_gunung', '$deskripsi_gunung', '$kecamatan_gunung', '$ketinggian_gunung')";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../gunung.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
