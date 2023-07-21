<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $nama_oleh_oleh = $_POST['nama_oleh_oleh'];
    $img_oleh_oleh = $_POST['img_oleh_oleh'];
    $deskripsi_oleh_oleh = $_POST['deskripsi_oleh_oleh'];
    // memasukan data menggunakan query sql
    $query = "INSERT INTO tabel_oleh_oleh (nama_oleh_oleh,img_oleh_oleh,deskripsi_oleh_oleh) VALUES ('$nama_oleh_oleh', '$img_oleh_oleh', '$deskripsi_oleh_oleh')";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../oleh_oleh.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}