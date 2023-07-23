<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $destinasi_id = $_POST['destinasi_id'];
    $nama_destinasi = $_POST['nama_destinasi'];
    $img_destinasi = $_POST['img_destinasi'];
    $deskripsi_destinasi .= $_POST["deskripsidestinasi$destinasi_id"];
    $link_google_maps_destinasi = $_POST['link_google_maps_destinasi'];
    // mengubah data menggunakan query sql
    $query = "UPDATE tabel_destinasi SET nama_destinasi = '$nama_destinasi', img_destinasi = '$img_destinasi', deskripsi_destinasi = '$deskripsi_destinasi', link_google_maps_destinasi = '$link_google_maps_destinasi' WHERE destinasi_id = '$destinasi_id'";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../destinasi.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
    
}