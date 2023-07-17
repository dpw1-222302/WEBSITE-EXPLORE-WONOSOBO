<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $kalender_event_id = $_POST['kalender_event_id'];
    $nama_event = $_POST['nama_event'];
    $deskripsi_event = $_POST['deskripsi_event'];
    $kategori_event = $_POST['kategori_event'];
    $tempat_event = $_POST['tempat_event'];
    $kecamatan_event = $_POST['kecamatan_event'];
    $tanggal_event = $_POST['tanggal_event'];
    $link_google_maps_event = $_POST['link_google_maps_event'];
    // mengubah data menggunakan query sql
    $query = "UPDATE tabel_kalender_event SET nama_event = '$nama_event', deskripsi_event = '$deskripsi_event', kategori_event = '$kategori_event', tempat_event = '$tempat_event', kecamatan_event = '$kecamatan_event', tanggal_event = '$tanggal_event', link_google_maps_event = '$link_google_maps_event' WHERE kalender_event_id = '$kalender_event_id'";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../kalender_event.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
