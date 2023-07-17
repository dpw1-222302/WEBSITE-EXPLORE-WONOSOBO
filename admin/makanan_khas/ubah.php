<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $makanan_khas_id = $_POST['makanan_khas_id'];
    $nama_makanan_khas = $_POST['nama_makanan_khas'];
    $deskripsi_makanan_khas = $_POST['deskripsi_makanan_khas'];
    // mengubah data menggunakan query sql
    $query = "UPDATE tabel_makanan_khas SET nama_makanan_khas = '$nama_makanan_khas', deskripsi_makanan_khas = '$deskripsi_makanan_khas' WHERE makanan_khas_id = '$makanan_khas_id'";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../makanan_khas.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
