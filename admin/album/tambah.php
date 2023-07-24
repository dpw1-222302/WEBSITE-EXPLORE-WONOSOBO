<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $link_instagram_album = $_POST['link_instagram_album'];
    // memasukan data menggunakan query sql
    $query = "INSERT INTO tabel_album (link_instagram_album) VALUES ('$link_instagram_album')";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../album.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
