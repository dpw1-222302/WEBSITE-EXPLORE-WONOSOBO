<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $nama_gunung = $_POST['nama_gunung'];
    $img_gunung = $_POST['img_gunung'];
    $deskripsi_gunung = $_POST['deskripsigunung'];
    $ketinggian_gunung = $_POST['ketinggian_gunung'];
    $link_google_maps_gunung = $_POST['link_google_maps_gunung'];
    // memasukan data menggunakan query sql
    $query = "INSERT INTO tabel_gunung(img_gunung, nama_gunung, deskripsi_gunung, ketinggian_gunung, link_google_maps_gunung) VALUES ('$img_gunung', '$nama_gunung', '$deskripsi_gunung', '$ketinggian_gunung', '$link_google_maps_gunung')";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../gunung.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
