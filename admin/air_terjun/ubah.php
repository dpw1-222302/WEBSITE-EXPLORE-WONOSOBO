<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $air_terjun_id = $_POST['air_terjun_id'];
    $img_air_terjun = $_POST['img_air_terjun'];
    $nama_air_terjun = $_POST['nama_air_terjun'];
    $deskripsi_air_terjun = $_POST["deskripsiairterjun$air_terjun_id"];
    $link_google_maps_air_terjun = $_POST['link_google_maps_air_terjun'];
    $ketinggian_air_terjun = $_POST['ketinggian_air_terjun'];
    // mengubah data menggunakan query sql
    $query = "UPDATE tabel_air_terjun SET img_air_terjun = '$img_air_terjun', nama_air_terjun = '$nama_air_terjun', deskripsi_air_terjun = '$deskripsi_air_terjun', link_google_maps_air_terjun = '$link_google_maps_air_terjun', ketinggian_air_terjun = '$ketinggian_air_terjun' WHERE air_terjun_id = '$air_terjun_id'";
    // jika berhasil maka dialihkan ke halaman produk
    if ($conn->query($query)) {
        header("Location: ../air_terjun.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}