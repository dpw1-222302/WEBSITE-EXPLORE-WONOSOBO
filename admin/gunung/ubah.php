<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $gunung_id = $_POST['gunung_id'];
    $nama_gunung = $_POST['nama_gunung'];
    $deskripsi_gunung = $_POST['deskripsi_gunung'];
    $kecamatan_gunung = $_POST['kecamatan_gunung'];
    $ketinggian_gunung = $_POST['ketinggian_gunung'];
    // mengubah data menggunakan query sql
    $query = "UPDATE tabel_gunung SET nama_gunung = '$nama_gunung', deskripsi_gunung = '$deskripsi_gunung', kecamatan_gunung = '$kecamatan_gunung', ketinggian_gunung = '$ketinggian_gunung' WHERE gunung_id = '$gunung_id'";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../gunung.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
