<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $nama_destinasi = $_POST['nama_destinasi'];
    $img_destinasi = $_POST['img_destinasi'];
    $deskripsi_destinasi = $_POST['deskripsidestinasi'];
    $link_google_maps_destinasi = $_POST['link_google_maps_destinasi'];
    // memasukan data menggunakan query sql
    $query = "INSERT INTO tabel_destinasi (nama_destinasi, img_destinasi, deskripsi_destinasi, link_google_maps_destinasi) VALUES ('$nama_destinasi', '$img_destinasi', '$deskripsi_destinasi', '$link_google_maps_destinasi')";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../destinasi.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}