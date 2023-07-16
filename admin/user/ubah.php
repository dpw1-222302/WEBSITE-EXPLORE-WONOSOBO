<?php
session_start();
include '../../connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // mengambil data dari inputan user
    $user_id = $_POST['user_id'];
    $nama_lengkap_user = $_POST['nama_lengkap_user'];
    $no_hp_user = $_POST['no_hp_user'];
    $email_user = $_POST['email_user'];
    $password_user = $_POST['password_user'];
    // mengubah data menggunakan query sql
    $query = "UPDATE tabel_user SET nama_lengkap_user = '$nama_lengkap_user', no_hp_user = '$no_hp_user', email_user = '$email_user', password_user = '$password_user' WHERE user_id = '$user_id'";
    // jika berhasil maka dialihkan ke halamaan produk
    if ($conn->query($query)) {
        header("Location: ../user.php");
        exit;
    } else {
        echo "Error executing query: " . $conn->error;
    }
}
