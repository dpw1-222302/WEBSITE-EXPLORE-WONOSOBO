<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Interface</div>
            <!-- Yang boleh di isi, mulai dari sini -->
            <a class="nav-link" href="kalender_event.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Kalender Event
            </a>
            <a class="nav-link" href="gunung.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Gunung
            </a>
            <a class="nav-link" href="air_terjun.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Air Terjun
            </a>
            <a class="nav-link" href="danau.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Danau
            </a>
            <a class="nav-link" href="makanan_khas.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Makanan Khas
            </a>
            <a class="nav-link" href="oleh_oleh.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Oleh-oleh
            </a>
            <a class="nav-link" href="destinasi.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Destinasi
            </a>
            <a class="nav-link" href="album.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Album
            </a>

            <!-- Sampai sini -->

            <div class="sb-sidenav-menu-heading">User</div>
            <a class="nav-link" href="user.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Admin
            </a>

            <div class="sb-sidenav-menu-heading">Template</div>
            <a class="nav-link" href="template.php">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Template Halaman
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Admin
    </div>
</nav>