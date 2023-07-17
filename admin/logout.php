<?php
session_start(); // Memulai session

// Cek apakah pengguna sudah login sebelum melakukan logout
if (isset($_SESSION['email_user'])) {
    // Menghapus semua data session
    session_unset();

    // Menghapus cookie session jika ada
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    }

    // Menghancurkan session
    session_destroy();
}

// Redirect ke halaman login setelah logout
header("Location: login.php");
exit();
