<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $img_makanan_khas = $_POST['img_makanan_khas'];
    $nama_makanan_khas = $_POST['nama_makanan_khas'];
    $deskripsi_makanan_khas = $_POST['deskripsimakanankhas'];
    // memasukan data menggunakan query sql
    $query = "INSERT INTO tabel_makanan_khas (img_makanan_khas, nama_makanan_khas, deskripsi_makanan_khas) VALUES ('$img_makanan_khas', '$nama_makanan_khas', '$deskripsi_makanan_khas')";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../makanan_khas.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
