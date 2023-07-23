<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $danau_id = $_POST['danau_id'];
    $img_danau = $_POST['img_danau'];
    $nama_danau = $_POST['nama_danau'];
    $deskripsi_danau = $_POST["deskripsidanau$danau_id"];
    $link_google_maps_danau = $_POST['link_google_maps_danau'];
    $luas_danau = $_POST['luas_danau'];
    // mengubah data menggunakan query sql
    $query = "UPDATE tabel_danau SET img_danau = '$img_danau', nama_danau = '$nama_danau', deskripsi_danau = '$deskripsi_danau', link_google_maps_danau = '$link_google_maps_danau', luas_danau = '$luas_danau' WHERE danau_id = '$danau_id'";
    // jika berhasil maka dialihkan ke halaman produk
    if ($conn->query($query)) {
        header("Location: ../danau.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}