<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $oleh_oleh_id = $_POST['oleh_oleh_id'];
    $nama_oleh_oleh = $_POST['nama_oleh_oleh'];
    $img_oleh_oleh = $_POST['img_oleh_oleh'];
    $deskripsi_oleh_oleh  = $_POST["deskripsidestinasi$oleh_oleh_id"];
    // mengubah data menggunakan query sql
    $query = "UPDATE tabel_oleh_oleh SET nama_oleh_oleh = '$nama_oleh_oleh', img_oleh_oleh = '$img_oleh_oleh', deskripsi_oleh_oleh  = '$deskripsi_oleh_oleh' WHERE oleh_oleh_id = '$oleh_oleh_id'";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../oleh_oleh.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}