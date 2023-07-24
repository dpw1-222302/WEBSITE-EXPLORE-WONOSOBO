<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include 'sidebar.php'; ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="my-4">Dashboard</h1>
                    <!-- isi konten mulai dari sini -->
                    <div class="card-deck">
                        <div class="card text-white bg-primary mb-3 text-center">
                            <div class="card-header">Jumlah</div>
                            <div class="card-body">
                                <h5 class="card-title">Gunung</h5>
                                <?php
                                include '../connect.php';
                                $sql = "SELECT COUNT(gunung_id) AS total FROM tabel_gunung";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $totalRows = $row['total'];

                                echo "<h1>$totalRows</h1>";
                                ?>
                            </div>
                        </div>
                        <div class="card text-white bg-secondary mb-3 text-center">
                            <div class="card-header">Jumlah</div>
                            <div class="card-body">
                                <h5 class="card-title">Event</h5>
                                <?php
                                include '../connect.php';
                                $sql = "SELECT COUNT(kalender_event_id) AS total FROM tabel_kalender_event";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $totalRows = $row['total'];

                                echo "<h1>$totalRows</h1>";
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="card-deck">
                        <div class="card text-white bg-success mb-3 text-center">
                            <div class="card-header">Jumlah</div>
                            <div class="card-body">
                                <h5 class="card-title">Air Terjun</h5>
                                <?php
                                include '../connect.php';
                                $sql = "SELECT COUNT(air_terjun_id) AS total FROM tabel_air_terjun";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $totalRows = $row['total'];

                                echo "<h1>$totalRows</h1>";
                                ?>
                            </div>
                        </div>
                        <div class="card text-white bg-danger mb-3 text-center">
                            <div class="card-header">Jumlah</div>
                            <div class="card-body">
                                <h5 class="card-title">Danau</h5>
                                <?php
                                include '../connect.php';
                                $sql = "SELECT COUNT(danau_id) AS total FROM tabel_danau";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $totalRows = $row['total'];

                                echo "<h1>$totalRows</h1>";
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="card-deck">
                        <div class="card text-white bg-warning mb-3 text-center">
                            <div class="card-header">Jumlah</div>
                            <div class="card-body">
                                <h5 class="card-title">Makanan Khas</h5>
                                <?php
                                include '../connect.php';
                                $sql = "SELECT COUNT(makanan_khas_id) AS total FROM tabel_makanan_khas";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $totalRows = $row['total'];

                                echo "<h1>$totalRows</h1>";
                                ?>
                            </div>
                        </div>
                        <div class="card text-white bg-info mb-3 text-center">
                            <div class="card-header">Jumlah</div>
                            <div class="card-body">
                                <h5 class="card-title">Oleh-oleh</h5>
                                <?php
                                include '../connect.php';
                                $sql = "SELECT COUNT(oleh_oleh_id) AS total FROM tabel_oleh_oleh";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $totalRows = $row['total'];

                                echo "<h1>$totalRows</h1>";
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="card-deck">
                        <div class="card text-white bg-dark mb-3 text-center">
                            <div class="card-header">Jumlah</div>
                            <div class="card-body">
                                <h5 class="card-title">Destinasi</h5>
                                <?php
                                include '../connect.php';
                                $sql = "SELECT COUNT(destinasi_id) AS total FROM tabel_destinasi";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $totalRows = $row['total'];

                                echo "<h1>$totalRows</h1>";
                                ?>
                            </div>
                        </div>
                        <div class="card text-white mb-3 text-center" style="background-color: purple;">
                            <div class="card-header">Jumlah</div>
                            <div class="card-body">
                                <h5 class="card-title">Album</h5>
                                <?php
                                include '../connect.php';
                                $sql = "SELECT COUNT(album_id) AS total FROM tabel_album";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                $totalRows = $row['total'];

                                echo "<h1>$totalRows</h1>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- isi konten berakhir di sini -->
                </div>
            </main>
            <?php include 'footer.php'; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>