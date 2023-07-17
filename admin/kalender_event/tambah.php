<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $nama_event = $_POST['nama_event'];
    $deskripsi_event = $_POST['deskripsi_event'];
    $kategori_event = $_POST['kategori_event'];
    $tempat_event = $_POST['tempat_event'];
    $kecamatan_event = $_POST['kecamatan_event'];
    $tanggal_event = $_POST['tanggal_event'];
    $link_google_maps_event = $_POST['link_google_maps_event'];
    // memasukan data menggunakan query sql
    $query = "INSERT INTO tabel_kalender_event (nama_event, deskripsi_event, kategori_event, tempat_event, kecamatan_event, tanggal_event, link_google_maps_event) VALUES ('$nama_event', '$deskripsi_event', '$kategori_event', '$tempat_event', '$kecamatan_event', '$tanggal_event', '$link_google_maps_event')";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../kalender_event.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
