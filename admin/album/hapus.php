<?php
session_start();
include '../../connect.php';
if (isset($_GET['id'])) {
    // mengambil data dari parameter url
    $id = $_GET['id'];
    // menghapus data menggunakan query sql
    $query = "DELETE FROM tabel_album WHERE album_id = $id";
    // jika berhasil maka dialihkan ke halaman produk
    if ($conn->query($query)) {
        header("Location: ../album.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
