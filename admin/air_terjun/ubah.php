<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $air_terjun_id = $_POST['air_terjun_id'];
    $nama_air_terjun = $_POST['nama_air_terjun'];
    $deskripsi_air_terjun = $_POST['deskripsi_air_terjun'];
    $kecamatan_air_terjun = $_POST['kecamatan_air_terjun'];
    $ketinggian_air_terjun = $_POST['ketinggian_air_terjun'];
    // mengubah data menggunakan query sql
    $query = "UPDATE tabel_air_terjun SET nama_air_terjun = '$nama_air_terjun', deskripsi_air_terjun = '$deskripsi_air_terjun', kecamatan_air_terjun = '$kecamatan_air_terjun', ketinggian_air_terjun = '$ketinggian_air_terjun' WHERE air_terjun_id = '$air_terjun_id'";
    // jika berhasil maka dialihkan ke halaman produk
    if ($conn->query($query)) {
        header("Location: ../air_terjun.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}