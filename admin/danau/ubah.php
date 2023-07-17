<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $danau_id = $_POST['danau_id'];
    $nama_danau = $_POST['nama_danau'];
    $deskripsi_danau = $_POST['deskripsi_danau'];
    $kecamatan_danau = $_POST['kecamatan_danau'];
    $luas_danau = $_POST['luas_danau'];
    // mengubah data menggunakan query sql
    $query = "UPDATE tabel_danau SET nama_danau = '$nama_danau', deskripsi_danau = '$deskripsi_danau', kecamatan_danau = '$kecamatan_danau', luas_danau = '$luas_danau' WHERE danau_id = '$danau_id'";
    // jika berhasil maka dialihkan ke halaman produk
    if ($conn->query($query)) {
        header("Location: ../danau.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}