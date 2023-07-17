<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $nama_danau = $_POST['nama_danau'];
    $deskripsi_danau = $_POST['deskripsi_danau'];
    $kecamatan_danau = $_POST['kecamatan_danau'];
    $luas_danau = $_POST['luas_danau'];
    // memasukan data menggunakan query sql
    $query = "INSERT INTO tabel_danau(nama_danau, deskripsi_danau, kecamatan_danau, luas_danau) VALUES ('$nama_danau', '$deskripsi_danau', '$kecamatan_danau', '$luas_danau')";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../danau.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
