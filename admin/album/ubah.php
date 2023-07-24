<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $album_id = $_POST['album_id'];
    $link_instagram_album = $_POST['link_instagram_album'];
    // mengubah data menggunakan query sql
    $query = "UPDATE tabel_album SET link_instagram_album = '$link_instagram_album' WHERE album_id = '$album_id'";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../album.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
