<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/25b07c5e9c.js" crossorigin="anonymous"></script>
    <style>
        /* kalender.php saja */
        .hover-shadow {
            border: 0;
            background-color: var(--bs-tertiary-bg);
        }

        .hover-shadow:hover {
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
            -webkit-transform: scale(1.03);
            transform: scale(1.03);
        }

        .col .card.active {
            border: 2px solid var(--bs-emphasis-color);
            border-radius: 1rem;
        }

        .col .card {
            border: 0px solid;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    <!-- End navbar -->

    <!-- Header -->
    <div>
        <img src="img/kalender/header.jpeg" class="w-100">
    </div>
    <!-- End Header -->

    <!-- Kalender event-event di Wonosobo -->
    <div class="container my-5">
        <div class="text-center mb-5">
            <h1>Kalender Event 2023 di Wonosobo</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <!-- Januari -->
            <div class="col">
                <div class="card <?php echo isTodayActive('01'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Januari</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <?php
                        include 'connect.php';
                        $currentYear = date('Y');
                        $query = "SELECT * FROM tabel_kalender_event WHERE MONTH(tanggal_event) = 1 AND YEAR(tanggal_event) = $currentYear ORDER BY tanggal_event ASC";
                        $datas = $conn->query($query);
                        foreach ($datas as $data) :
                        ?>
                            <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['kalender_event_id'] ?>">
                                <div class="card-text mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                        <div>
                                            <h6 class="card-subtitle mb-1"><?= $data['nama_event'] ?></h6>
                                            <span class="card-text text-body-secondary">Tanggal: <?= explode('-', $data['tanggal_event'])[2] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Detail event -->
                            <div class="modal fade" id="exampleModal<?= $data['kalender_event_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content rounded-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_event'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $data['img_kalender_event'] ?>" class="rounded-4 w-100">
                                            <h2 class="my-4"><?= $data['nama_event'] ?></h2>
                                            <p class="mb-3">Tanggal: <?= date('l, d F Y', strtotime($data['tanggal_event'])) ?></p>
                                            <p class="mb-3">Tempat: <?= $data['tempat_event'] ?></p>
                                            <p style="text-align: justify;"><?= $data['deskripsi_event'] ?></p>
                                            <div class="text-center mt-5">
                                                <?= $data['link_google_maps_event'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Detail Event -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- Februari -->
            <div class="col">
                <div class="card <?php echo isTodayActive('02'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Februari</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <?php
                        include 'connect.php';
                        $currentYear = date('Y');
                        $query = "SELECT * FROM tabel_kalender_event WHERE MONTH(tanggal_event) = 2 AND YEAR(tanggal_event) = $currentYear ORDER BY tanggal_event ASC";
                        $datas = $conn->query($query);
                        foreach ($datas as $data) :
                        ?>
                            <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['kalender_event_id'] ?>">
                                <div class="card-text mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                        <div>
                                            <h6 class="card-subtitle mb-1"><?= $data['nama_event'] ?></h6>
                                            <span class="card-text text-body-secondary">Tanggal: <?= explode('-', $data['tanggal_event'])[2] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Detail event -->
                            <div class="modal fade" id="exampleModal<?= $data['kalender_event_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content rounded-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_event'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $data['img_kalender_event'] ?>" class="rounded-4 w-100">
                                            <h2 class="my-4"><?= $data['nama_event'] ?></h2>
                                            <p class="mb-3">Tanggal: <?= date('l, d F Y', strtotime($data['tanggal_event'])) ?></p>
                                            <p class="mb-3">Tempat: <?= $data['tempat_event'] ?></p>
                                            <p style="text-align: justify;"><?= $data['deskripsi_event'] ?></p>
                                            <div class="text-center mt-5">
                                                <?= $data['link_google_maps_event'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Detail Event -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- Maret -->
            <div class="col">
                <div class="card <?php echo isTodayActive('03'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Maret</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <?php
                        include 'connect.php';
                        $currentYear = date('Y');
                        $query = "SELECT * FROM tabel_kalender_event WHERE MONTH(tanggal_event) = 3 AND YEAR(tanggal_event) = $currentYear ORDER BY tanggal_event ASC";
                        $datas = $conn->query($query);
                        foreach ($datas as $data) :
                        ?>
                            <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['kalender_event_id'] ?>">
                                <div class="card-text mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                        <div>
                                            <h6 class="card-subtitle mb-1"><?= $data['nama_event'] ?></h6>
                                            <span class="card-text text-body-secondary">Tanggal: <?= explode('-', $data['tanggal_event'])[2] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Detail event -->
                            <div class="modal fade" id="exampleModal<?= $data['kalender_event_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content rounded-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_event'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $data['img_kalender_event'] ?>" class="rounded-4 w-100">
                                            <h2 class="my-4"><?= $data['nama_event'] ?></h2>
                                            <p class="mb-3">Tanggal: <?= date('l, d F Y', strtotime($data['tanggal_event'])) ?></p>
                                            <p class="mb-3">Tempat: <?= $data['tempat_event'] ?></p>
                                            <p style="text-align: justify;"><?= $data['deskripsi_event'] ?></p>
                                            <div class="text-center mt-5">
                                                <?= $data['link_google_maps_event'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Detail Event -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- April -->
            <div class="col">
                <div class="card <?php echo isTodayActive('04'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">April</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <?php
                        include 'connect.php';
                        $currentYear = date('Y');
                        $query = "SELECT * FROM tabel_kalender_event WHERE MONTH(tanggal_event) = 4 AND YEAR(tanggal_event) = $currentYear ORDER BY tanggal_event ASC";
                        $datas = $conn->query($query);
                        foreach ($datas as $data) :
                        ?>
                            <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['kalender_event_id'] ?>">
                                <div class="card-text mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                        <div>
                                            <h6 class="card-subtitle mb-1"><?= $data['nama_event'] ?></h6>
                                            <span class="card-text text-body-secondary">Tanggal: <?= explode('-', $data['tanggal_event'])[2] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Detail event -->
                            <div class="modal fade" id="exampleModal<?= $data['kalender_event_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content rounded-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_event'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $data['img_kalender_event'] ?>" class="rounded-4 w-100">
                                            <h2 class="my-4"><?= $data['nama_event'] ?></h2>
                                            <p class="mb-3">Tanggal: <?= date('l, d F Y', strtotime($data['tanggal_event'])) ?></p>
                                            <p class="mb-3">Tempat: <?= $data['tempat_event'] ?></p>
                                            <p style="text-align: justify;"><?= $data['deskripsi_event'] ?></p>
                                            <div class="text-center mt-5">
                                                <?= $data['link_google_maps_event'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Detail Event -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- Mei -->
            <div class="col">
                <div class="card <?php echo isTodayActive('05'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Mei</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <?php
                        include 'connect.php';
                        $currentYear = date('Y');
                        $query = "SELECT * FROM tabel_kalender_event WHERE MONTH(tanggal_event) = 5 AND YEAR(tanggal_event) = $currentYear ORDER BY tanggal_event ASC";
                        $datas = $conn->query($query);
                        foreach ($datas as $data) :
                        ?>
                            <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['kalender_event_id'] ?>">
                                <div class="card-text mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                        <div>
                                            <h6 class="card-subtitle mb-1"><?= $data['nama_event'] ?></h6>
                                            <span class="card-text text-body-secondary">Tanggal: <?= explode('-', $data['tanggal_event'])[2] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Detail event -->
                            <div class="modal fade" id="exampleModal<?= $data['kalender_event_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content rounded-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_event'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $data['img_kalender_event'] ?>" class="rounded-4 w-100">
                                            <h2 class="my-4"><?= $data['nama_event'] ?></h2>
                                            <p class="mb-3">Tanggal: <?= date('l, d F Y', strtotime($data['tanggal_event'])) ?></p>
                                            <p class="mb-3">Tempat: <?= $data['tempat_event'] ?></p>
                                            <p style="text-align: justify;"><?= $data['deskripsi_event'] ?></p>
                                            <div class="text-center mt-5">
                                                <?= $data['link_google_maps_event'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Detail Event -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- Juni -->
            <div class="col">
                <div class="card <?php echo isTodayActive('06'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Juni</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <?php
                        include 'connect.php';
                        $currentYear = date('Y');
                        $query = "SELECT * FROM tabel_kalender_event WHERE MONTH(tanggal_event) = 6 AND YEAR(tanggal_event) = $currentYear ORDER BY tanggal_event ASC";
                        $datas = $conn->query($query);
                        foreach ($datas as $data) :
                        ?>
                            <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['kalender_event_id'] ?>">
                                <div class="card-text mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                        <div>
                                            <h6 class="card-subtitle mb-1"><?= $data['nama_event'] ?></h6>
                                            <span class="card-text text-body-secondary">Tanggal: <?= explode('-', $data['tanggal_event'])[2] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Detail event -->
                            <div class="modal fade" id="exampleModal<?= $data['kalender_event_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content rounded-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_event'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $data['img_kalender_event'] ?>" class="rounded-4 w-100">
                                            <h2 class="my-4"><?= $data['nama_event'] ?></h2>
                                            <p class="mb-3">Tanggal: <?= date('l, d F Y', strtotime($data['tanggal_event'])) ?></p>
                                            <p class="mb-3">Tempat: <?= $data['tempat_event'] ?></p>
                                            <p style="text-align: justify;"><?= $data['deskripsi_event'] ?></p>
                                            <div class="text-center mt-5">
                                                <?= $data['link_google_maps_event'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Detail Event -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- Juli -->
            <div class="col">
                <div class="card <?php echo isTodayActive('07'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Juli</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <?php
                        include 'connect.php';
                        $currentYear = date('Y');
                        $query = "SELECT * FROM tabel_kalender_event WHERE MONTH(tanggal_event) = 7 AND YEAR(tanggal_event) = $currentYear ORDER BY tanggal_event ASC";
                        $datas = $conn->query($query);
                        foreach ($datas as $data) :
                        ?>
                            <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['kalender_event_id'] ?>">
                                <div class="card-text mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                        <div>
                                            <h6 class="card-subtitle mb-1"><?= $data['nama_event'] ?></h6>
                                            <span class="card-text text-body-secondary">Tanggal: <?= explode('-', $data['tanggal_event'])[2] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Detail event -->
                            <div class="modal fade" id="exampleModal<?= $data['kalender_event_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content rounded-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_event'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $data['img_kalender_event'] ?>" class="rounded-4 w-100">
                                            <h2 class="my-4"><?= $data['nama_event'] ?></h2>
                                            <p class="mb-3">Tanggal: <?= date('l, d F Y', strtotime($data['tanggal_event'])) ?></p>
                                            <p class="mb-3">Tempat: <?= $data['tempat_event'] ?></p>
                                            <p style="text-align: justify;"><?= $data['deskripsi_event'] ?></p>
                                            <div class="text-center mt-5">
                                                <?= $data['link_google_maps_event'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Detail Event -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- Agustus -->
            <div class="col">
                <div class="card <?php echo isTodayActive('08'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Agustus</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <?php
                        include 'connect.php';
                        $currentYear = date('Y');
                        $query = "SELECT * FROM tabel_kalender_event WHERE MONTH(tanggal_event) = 8 AND YEAR(tanggal_event) = $currentYear ORDER BY tanggal_event ASC";
                        $datas = $conn->query($query);
                        foreach ($datas as $data) :
                        ?>
                            <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['kalender_event_id'] ?>">
                                <div class="card-text mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                        <div>
                                            <h6 class="card-subtitle mb-1"><?= $data['nama_event'] ?></h6>
                                            <span class="card-text text-body-secondary">Tanggal: <?= explode('-', $data['tanggal_event'])[2] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Detail event -->
                            <div class="modal fade" id="exampleModal<?= $data['kalender_event_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content rounded-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_event'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $data['img_kalender_event'] ?>" class="rounded-4 w-100">
                                            <h2 class="my-4"><?= $data['nama_event'] ?></h2>
                                            <p class="mb-3">Tanggal: <?= date('l, d F Y', strtotime($data['tanggal_event'])) ?></p>
                                            <p class="mb-3">Tempat: <?= $data['tempat_event'] ?></p>
                                            <p style="text-align: justify;"><?= $data['deskripsi_event'] ?></p>
                                            <div class="text-center mt-5">
                                                <?= $data['link_google_maps_event'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Detail Event -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- September -->
            <div class="col">
                <div class="card <?php echo isTodayActive('09'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">September</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <?php
                        include 'connect.php';
                        $currentYear = date('Y');
                        $query = "SELECT * FROM tabel_kalender_event WHERE MONTH(tanggal_event) = 9 AND YEAR(tanggal_event) = $currentYear ORDER BY tanggal_event ASC";
                        $datas = $conn->query($query);
                        foreach ($datas as $data) :
                        ?>
                            <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['kalender_event_id'] ?>">
                                <div class="card-text mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                        <div>
                                            <h6 class="card-subtitle mb-1"><?= $data['nama_event'] ?></h6>
                                            <span class="card-text text-body-secondary">Tanggal: <?= explode('-', $data['tanggal_event'])[2] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Detail event -->
                            <div class="modal fade" id="exampleModal<?= $data['kalender_event_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content rounded-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_event'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $data['img_kalender_event'] ?>" class="rounded-4 w-100">
                                            <h2 class="my-4"><?= $data['nama_event'] ?></h2>
                                            <p class="mb-3">Tanggal: <?= date('l, d F Y', strtotime($data['tanggal_event'])) ?></p>
                                            <p class="mb-3">Tempat: <?= $data['tempat_event'] ?></p>
                                            <p style="text-align: justify;"><?= $data['deskripsi_event'] ?></p>
                                            <div class="text-center mt-5">
                                                <?= $data['link_google_maps_event'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Detail Event -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- Oktober -->
            <div class="col">
                <div class="card <?php echo isTodayActive('10'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Oktober</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <?php
                        include 'connect.php';
                        $currentYear = date('Y');
                        $query = "SELECT * FROM tabel_kalender_event WHERE MONTH(tanggal_event) = 10 AND YEAR(tanggal_event) = $currentYear ORDER BY tanggal_event ASC";
                        $datas = $conn->query($query);
                        foreach ($datas as $data) :
                        ?>
                            <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['kalender_event_id'] ?>">
                                <div class="card-text mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                        <div>
                                            <h6 class="card-subtitle mb-1"><?= $data['nama_event'] ?></h6>
                                            <span class="card-text text-body-secondary">Tanggal: <?= explode('-', $data['tanggal_event'])[2] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Detail event -->
                            <div class="modal fade" id="exampleModal<?= $data['kalender_event_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content rounded-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_event'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $data['img_kalender_event'] ?>" class="rounded-4 w-100">
                                            <h2 class="my-4"><?= $data['nama_event'] ?></h2>
                                            <p class="mb-3">Tanggal: <?= date('l, d F Y', strtotime($data['tanggal_event'])) ?></p>
                                            <p class="mb-3">Tempat: <?= $data['tempat_event'] ?></p>
                                            <p style="text-align: justify;"><?= $data['deskripsi_event'] ?></p>
                                            <div class="text-center mt-5">
                                                <?= $data['link_google_maps_event'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Detail Event -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- November -->
            <div class="col">
                <div class="card <?php echo isTodayActive('11'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">November</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <?php
                        include 'connect.php';
                        $currentYear = date('Y');
                        $query = "SELECT * FROM tabel_kalender_event WHERE MONTH(tanggal_event) = 11 AND YEAR(tanggal_event) = $currentYear ORDER BY tanggal_event ASC";
                        $datas = $conn->query($query);
                        foreach ($datas as $data) :
                        ?>
                            <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['kalender_event_id'] ?>">
                                <div class="card-text mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                        <div>
                                            <h6 class="card-subtitle mb-1"><?= $data['nama_event'] ?></h6>
                                            <span class="card-text text-body-secondary">Tanggal: <?= explode('-', $data['tanggal_event'])[2] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Detail event -->
                            <div class="modal fade" id="exampleModal<?= $data['kalender_event_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content rounded-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_event'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $data['img_kalender_event'] ?>" class="rounded-4 w-100">
                                            <h2 class="my-4"><?= $data['nama_event'] ?></h2>
                                            <p class="mb-3">Tanggal: <?= date('l, d F Y', strtotime($data['tanggal_event'])) ?></p>
                                            <p class="mb-3">Tempat: <?= $data['tempat_event'] ?></p>
                                            <p style="text-align: justify;"><?= $data['deskripsi_event'] ?></p>
                                            <div class="text-center mt-5">
                                                <?= $data['link_google_maps_event'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Detail Event -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- Desember -->
            <div class="col">
                <div class="card <?php echo isTodayActive('12'); ?>">
                    <div class="card-body text-center rounded-top-4" style="background-color: var(--bs-secondary-bg);">
                        <span class="card-title h5">Desember</span>
                    </div>
                    <div class="card-body rounded-bottom-4" style="background-color: var(--bs-tertiary-bg);">
                        <?php
                        include 'connect.php';
                        $currentYear = date('Y');
                        $query = "SELECT * FROM tabel_kalender_event WHERE MONTH(tanggal_event) = 12 AND YEAR(tanggal_event) = $currentYear ORDER BY tanggal_event ASC";
                        $datas = $conn->query($query);
                        foreach ($datas as $data) :
                        ?>
                            <a href="#" class="text-decoration-none link-body-emphasis" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data['kalender_event_id'] ?>">
                                <div class="card-text mb-3">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-calendar-day fa-2xl me-2 mt-3"></i>
                                        <div>
                                            <h6 class="card-subtitle mb-1"><?= $data['nama_event'] ?></h6>
                                            <span class="card-text text-body-secondary">Tanggal: <?= explode('-', $data['tanggal_event'])[2] ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Detail event -->
                            <div class="modal fade" id="exampleModal<?= $data['kalender_event_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content rounded-4">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $data['nama_event'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= $data['img_kalender_event'] ?>" class="rounded-4 w-100">
                                            <h2 class="my-4"><?= $data['nama_event'] ?></h2>
                                            <p class="mb-3">Tanggal: <?= date('l, d F Y', strtotime($data['tanggal_event'])) ?></p>
                                            <p class="mb-3">Tempat: <?= $data['tempat_event'] ?></p>
                                            <p style="text-align: justify;"><?= $data['deskripsi_event'] ?></p>
                                            <div class="text-center mt-5">
                                                <?= $data['link_google_maps_event'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Detail Event -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Kalender event-event di Wonosobo -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        /*!
         * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
         * Copyright 2011-2023 The Bootstrap Authors
         * Licensed under the Creative Commons Attribution 3.0 Unported License.
         */

        (() => {
            'use strict'

            const getStoredTheme = () => localStorage.getItem('theme')
            const setStoredTheme = theme => localStorage.setItem('theme', theme)

            const getPreferredTheme = () => {
                const storedTheme = getStoredTheme()
                if (storedTheme) {
                    return storedTheme
                }

                return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
            }

            const setTheme = theme => {
                if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.setAttribute('data-bs-theme', 'dark')
                } else {
                    document.documentElement.setAttribute('data-bs-theme', theme)
                }
            }

            setTheme(getPreferredTheme())

            const showActiveTheme = (theme, focus = false) => {
                const themeSwitcher = document.querySelector('#bd-theme')

                if (!themeSwitcher) {
                    return
                }

                const themeSwitcherText = document.querySelector('#bd-theme-text')
                const activeThemeIcon = document.querySelector('.theme-icon-active')
                const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
                const iconOfActiveBtn = btnToActive.querySelector('i').dataset.themeIcon

                document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
                    element.classList.remove('active')
                    element.setAttribute('aria-pressed', 'false')
                })

                btnToActive.classList.add('active')
                btnToActive.setAttribute('aria-pressed', 'true')
                activeThemeIcon.classList.remove(activeThemeIcon.dataset.themeIconActive)
                activeThemeIcon.classList.add(iconOfActiveBtn)
                activeThemeIcon.dataset.iconActive = iconOfActiveBtn
                const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
                themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

                if (focus) {
                    themeSwitcher.focus()
                }
            }

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                const storedTheme = getStoredTheme()
                if (storedTheme !== 'light' && storedTheme !== 'dark') {
                    setTheme(getPreferredTheme())
                }
            })

            window.addEventListener('DOMContentLoaded', () => {
                showActiveTheme(getPreferredTheme())

                document.querySelectorAll('[data-bs-theme-value]')
                    .forEach(toggle => {
                        toggle.addEventListener('click', () => {
                            const theme = toggle.getAttribute('data-bs-theme-value')
                            setStoredTheme(theme)
                            setTheme(theme)
                            showActiveTheme(theme, true)
                        })
                    })
            })
        })()
    </script>
    <script>
        $(window).scroll(function() {
            var navbar = $(".navbar");
            var scroll = $(window).scrollTop();

            if (scroll > 0) {
                navbar.addClass("navbar-scrolled");
            } else {
                navbar.removeClass("navbar-scrolled");
            }
        });
    </script>
</body>

</html>

<?php
function isTodayActive($targetDate)
{
    // Mengatur zona waktu sesuai kebutuhan
    date_default_timezone_set('Asia/Jakarta');

    // Mendapatkan tanggal hari ini dalam format Y-m-d (misalnya: 2023-07-23)
    $today = date('m');

    // Periksa apakah tanggal hari ini sama dengan tanggal target
    if ($today === $targetDate) {
        return 'active';
    } else {
        return '';
    }
}
?>