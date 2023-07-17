<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $nama_air_terjun = $_POST['nama_air_terjun'];
    $deskripsi_air_terjun = $_POST['deskripsi_air_terjun'];
    $kecamatan_air_terjun = $_POST['kecamatan_air_terjun'];
    $ketinggian_air_terjun = $_POST['ketinggian_air_terjun'];
    // memasukan data menggunakan query sql
    $query = "INSERT INTO tabel_air_terjun(nama_air_terjun, deskripsi_air_terjun, kecamatan_air_terjun, ketinggian_air_terjun) VALUES ('$nama_air_terjun', '$deskripsi_air_terjun', '$kecamatan_air_terjun', '$ketinggian_air_terjun')";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../air_terjun.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
