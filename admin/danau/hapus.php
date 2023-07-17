<?php
session_start();
include '../../connect.php';
if (isset($_GET['id'])) {
    // mengambil data dari parameter url
    $id = $_GET['id'];
    // menghapus data menggunakan query sql
    $query = "DELETE FROM tabel_danau WHERE danau_id = $id";
    // jika berhasil maka dialihkan ke halaman produk
    if ($conn->query($query)) {
        header("Location: ../danau.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
