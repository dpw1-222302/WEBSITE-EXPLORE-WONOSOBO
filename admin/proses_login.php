<?php
// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start(); // Memulai session
    // Lakukan operasi pengecekan login di database
    require_once('../connect.php');
    // Query untuk memeriksa kecocokan email dan password di tabel pengguna
    // Buat query untuk mengecek apakah terdapat user dengan email X dan password Y, jika ya maka login berhasil
    $query = "SELECT * FROM tabel_user WHERE email_user = '" . $_POST['email_user'] . "' AND password_user = '" . $_POST['password_user'] . "'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // Login berhasil, simpan data pengguna ke dalam session
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['email_user'] = $user['email_user'];
        $_SESSION['nama_lengkap_user'] = $user['nama_lengkap_user'];
        header("Location: index.php");
        exit();
    } else {
        echo "Login gagal. Silakan cek kembali email dan password Anda.";
    }
    // Tutup koneksi database
    $conn->close();
}
