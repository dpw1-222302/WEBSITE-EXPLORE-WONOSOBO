<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $img_danau = $_POST['img_danau'];
    $nama_danau = $_POST['nama_danau'];
    $deskripsi_danau = $_POST['deskripsidanau'];
    $link_google_maps_danau = $_POST['link_google_maps_danau'];
    $luas_danau = $_POST['luas_danau'];
    // memasukan data menggunakan query sql
    $query = "INSERT INTO tabel_danau(img_danau, nama_danau, deskripsi_danau, link_google_maps_danau, luas_danau) VALUES ('$img_danau', '$nama_danau', '$deskripsi_danau', '$link_google_maps_danau', '$luas_danau')";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../danau.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
