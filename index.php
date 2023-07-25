<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beranda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/25b07c5e9c.js" crossorigin="anonymous"></script>
  <style>
    .shadow-inset {
      box-shadow: inset 0 6px 6px -6px rgba(0, 0, 0, 0.5),
        inset 0 -6px 6px -6px rgba(0, 0, 0, 0.5);
    }

    .gb-blur {
      backdrop-filter: blur(8px);
    }

    .col .card.active {
      border: 2px solid var(--bs-emphasis-color);
    }

    /* Gaya CSS untuk konten di bawah 1400px */
    @media (min-width: 1400px) {

      .maps-xl,
      .maps-lg,
      .maps-md,
      .maps-sm,
      .maps {
        display: none;
      }
    }

    @media (max-width: 1399px) {

      .maps-xxl,
      .maps-lg,
      .maps-md,
      .maps-sm,
      .maps {
        display: none;
      }

      .maps-xl {
        display: block;
      }
    }

    @media (max-width: 1199px) {
      .maps-xl {
        display: none;
      }

      .maps-lg {
        display: block;
      }
    }

    @media (max-width: 991px) {
      .maps-lg {
        display: none;
      }

      .maps-md {
        display: block;
      }
    }

    @media (max-width: 767px) {
      .maps-md {
        display: none;
      }

      .maps-sm {
        display: block;
      }
    }

    @media (max-width: 575px) {
      .maps-sm {
        display: none;
      }

      .maps {
        display: block;
      }
    }

    /* Gaya CSS untuk konten di antara 489px hingga 991px */
    /* @media (min-width: 489px) and (max-width: 991px) {
      .event-none {
        display: none;
      }
    } */
  </style>
</head>

<body>
  <!-- Navbar -->
  <?php include 'navbar.php'; ?>
  <!-- End navbar -->

  <!-- Header -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/header/1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block gb-blur rounded-4 px-5 py-4 text-light">
          <h5>Festival Balon Udara Tradisional Wonosobo</h5>
          <p>Balon udara tradisional Wonosobo merupakan sebuah tradisi turun menurun yang dilakukan masyarakat Wonosobo, terutama di Desa Kembaran, Kalikajar Wonosobo. Balon yang beraneka macam warna dan ukuran ini di terbangkan saat perayaan Hari Raya Idul Fitri, sebagai ungkapan suka cita masyarakat dan untuk menjalin silaturahmi warga sekitar. </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/header/2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block gb-blur rounded-4 px-5 py-4 text-light">
          <h5>Alun-alun Wonosobo</h5>
          <p>Alun-Alun Wonosobo cocok untuk menjadi tempat bersantai dan beristirahat bersama keluarga maupun teman. Di tempat ini, terdapat banyak jajanan tradisional, seperti batagor, mie ongklok, siomay, dan lain-lain. Selain itu, kamu juga bisa berfoto-foto karena tempat ini sangat menarik untuk dijadikan objek foto.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/header/4.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block gb-blur rounded-4 px-5 py-4 text-light">
          <h5>Telaga Warna Kawasan Dataran Tinggi Dieng</h5>
          <p>Nama Telaga Warna sendiri diberikan karena keunikan fenomena alam yang terjadi di tempat ini, yaitu warna air dari telaga tersebut yang sering berubah-ubah. Terkadang telaga ini berwarna hijau dan kuning atau berwarna warni seperti pelangi. Telaga Warna berada di ketinggian 2000 meter di atas permukaan laut, dan dikelilingi oleh bukit-bukit tinggi yang menambah pesona keindahan alam sekitar telaga warna.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- End Header -->

  <!-- Didukung Oleh -->
  <div class="text-center mt-5 py-5 container">
    <h1 class="mb-5">Didukung Oleh:</h1>
    <img src="https://humas.jatengprov.go.id/foto/1622767670852-Logo%20Provinsi%20Jawa%20Tengah%20(PNG-1080p)%20-%20FileVector69.png" class="img-fluid mx-4 mb-5" style="height: 120px;">
    <img src="https://3.bp.blogspot.com/-Hqyb-MEYNpo/XL7MoQdTKPI/AAAAAAAAEIc/VjUSFiEqdN8i66ZnKnpmbF4ZJYVKz6kZwCLcBGAs/s1600/logo-wonderful-indonesia.png" class="img-fluid mx-4 mb-5" style="height: 120px;">
    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Lambang_Kabupaten_Wonosobo.webp" class="img-fluid mx-4 mb-5" style="height: 120px;">
    <img src="https://www.vokasi.kemdikbud.go.id/front-end/images/uploads/BBWI.png" class="img-fluid mx-4 mb-5" style="height: 120px;">
    <img src="https://upload.wikimedia.org/wikipedia/commons/d/dd/LOGO_KEMENPAREKRAF_%28BAPAREKRAF%29.png" class="img-fluid mx-4 mb-5" style="height: 120px;">
    <img src="https://3.bp.blogspot.com/-xj_scY3nOMM/XEAA5w5UjgI/AAAAAAAARnQ/ySeVadMZIawy9pX4OW5f7kddbuBRR2pIwCLcBGAs/s1600/Jateng%2BGayeng.png" class="img-fluid mx-4 mb-5" style="height: 120px;">
    <img src="https://gusblerogarden.files.wordpress.com/2018/07/logo-the-soul-of-java.png?w=586&h=385" class="img-fluid mx-4 mb-5" style="height: 120px;">
    <img src="https://upload.wikimedia.org/wikipedia/commons/4/46/Lambang_Polda_Jateng.png" class="img-fluid mx-4 mb-5" style="height: 120px;">
    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/c/c4/Bank_Jateng_logo.svg/1200px-Bank_Jateng_logo.svg.png" class="img-fluid mx-4 mb-5" style="height: 120px;">
    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Logo_Institut_Teknologi_Telkom_Purwokerto_Versi_Vertikal.png" class="img-fluid mx-4 mb-5" style="height: 120px;">
    <img src="https://www.its.ac.id/wp-content/uploads/2019/03/LOGO-BARU-TELKOM.png" class="img-fluid mx-4 mb-5" style="height: 120px;">
  </div>
  <!-- End Didukung Oleh -->

  <!-- Kalender Event (index) -->
  <div id="carouselCard" class="event-none carousel slide mt-5 pb-3 pt-5 shadow-inset" style="background-color: var(--bs-secondary-bg);">
    <div class="container text-center">
      <h1 class="mb-5">Kalender Event <?php echo date('Y'); ?></h1>
    </div>
    <div class="carousel-inner">

      <!-- Janiari - April -->
      <div class="carousel-item <?php echo colTodayActive('01', '04'); ?>">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-4">

            <!-- Januari -->
            <div class="col">
              <div class="card shadow rounded-4 mb-5 <?php echo isTodayActive('01'); ?>">

                <div class="card-header text-center">
                  <span class="card-title h5">Januari</span>
                </div>

                <div class="card-body">
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
              <div class="card shadow rounded-4 mb-5 <?php echo isTodayActive('02'); ?>">

                <div class="card-header text-center">
                  <span class="card-title h5">Februari</span>
                </div>

                <div class="card-body">
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
              <div class="card shadow rounded-4 mb-5 <?php echo isTodayActive('03'); ?>">

                <div class="card-header text-center">
                  <span class="card-title h5">Maret</span>
                </div>

                <div class="card-body">
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
              <div class="card shadow rounded-4 mb-5 <?php echo isTodayActive('04'); ?>">

                <div class="card-header text-center">
                  <span class="card-title h5">April</span>
                </div>

                <div class="card-body">
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

          </div>
        </div>
      </div>

      <!-- Mei - Agustus -->
      <div class="carousel-item <?php echo colTodayActive('05', '08'); ?>">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-4">

            <!-- Mei -->
            <div class="col">
              <div class="card shadow rounded-4 mb-5 <?php echo isTodayActive('05'); ?>">

                <div class="card-header text-center">
                  <span class="card-title h5">Mei</span>
                </div>

                <div class="card-body">
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
              <div class="card shadow rounded-4 mb-5 <?php echo isTodayActive('06'); ?>">

                <div class="card-header text-center">
                  <span class="card-title h5">Juni</span>
                </div>

                <div class="card-body">
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
              <div class="card shadow rounded-4 mb-5 <?php echo isTodayActive('07'); ?>">

                <div class="card-header text-center">
                  <span class="card-title h5">Juli</span>
                </div>

                <div class="card-body">
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
              <div class="card shadow rounded-4 mb-5 <?php echo isTodayActive('08'); ?>">

                <div class="card-header text-center">
                  <span class="card-title h5">Agustus</span>
                </div>

                <div class="card-body">
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

          </div>
        </div>
      </div>

      <!-- September - Desember -->
      <div class="carousel-item <?php echo colTodayActive('09', '12'); ?>">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-4">

            <!-- September -->
            <div class="col">
              <div class="card shadow rounded-4 mb-5 <?php echo isTodayActive('09'); ?>">

                <div class="card-header text-center">
                  <span class="card-title h5">September</span>
                </div>

                <div class="card-body">
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
              <div class="card shadow rounded-4 mb-5 <?php echo isTodayActive('10'); ?>">

                <div class="card-header text-center">
                  <span class="card-title h5">Oktober</span>
                </div>

                <div class="card-body">
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
              <div class="card shadow rounded-4 mb-5 <?php echo isTodayActive('11'); ?>">

                <div class="card-header text-center">
                  <span class="card-title h5">November</span>
                </div>

                <div class="card-body">
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
              <div class="card shadow rounded-4 mb-5 <?php echo isTodayActive('12'); ?>">

                <div class="card-header text-center">
                  <span class="card-title h5">Desember</span>
                </div>

                <div class="card-body">
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
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCard" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-dark border border-5 border-dark rounded-circle" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCard" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-dark border border-5 border-dark rounded-circle" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>
  <!-- End Kalender Event (index) -->

  <!-- Google maps -->
  <div class="text-center maps-xxl">
    <div class="my-5">
      <h1>Peta Wilayah kabupaten Wonosobo</h1>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d316866.49477531423!2d109.89398486916329!3d-7.386402532778933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa182f62f7513%3A0x3027a76e352bab0!2sKabupaten%20Wonosobo%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1689697108470!5m2!1sid!2sid" width="1296" height="500" class="rounded-4" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="text-center maps-xl">
    <div class="my-5">
      <h1>Peta Wilayah kabupaten Wonosobo</h1>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d316866.49477531423!2d109.89398486916329!3d-7.386402532778933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa182f62f7513%3A0x3027a76e352bab0!2sKabupaten%20Wonosobo%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1689697108470!5m2!1sid!2sid" width="1116" height="500" class="rounded-4" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="text-center maps-lg">
    <div class="my-5">
      <h1>Peta Wilayah kabupaten Wonosobo</h1>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d316866.49477531423!2d109.89398486916329!3d-7.386402532778933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa182f62f7513%3A0x3027a76e352bab0!2sKabupaten%20Wonosobo%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1689697108470!5m2!1sid!2sid" width="936" height="500" class="rounded-4" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="text-center maps-md">
    <div class="my-5">
      <h1>Peta Wilayah kabupaten Wonosobo</h1>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d316866.49477531423!2d109.89398486916329!3d-7.386402532778933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa182f62f7513%3A0x3027a76e352bab0!2sKabupaten%20Wonosobo%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1689697108470!5m2!1sid!2sid" width="696" height="500" class="rounded-4" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="text-center maps-sm">
    <div class="my-5">
      <h1>Peta Wilayah kabupaten Wonosobo</h1>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d316866.49477531423!2d109.89398486916329!3d-7.386402532778933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa182f62f7513%3A0x3027a76e352bab0!2sKabupaten%20Wonosobo%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1689697108470!5m2!1sid!2sid" width="516" height="500" class="rounded-4" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="text-center maps">
    <div class="my-5">
      <h1>Peta Wilayah kabupaten Wonosobo</h1>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d316866.49477531423!2d109.89398486916329!3d-7.386402532778933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa182f62f7513%3A0x3027a76e352bab0!2sKabupaten%20Wonosobo%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1689697108470!5m2!1sid!2sid" width="300" height="500" class="rounded-4" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <!-- End Google maps -->

  <!-- Tunggu apa lagi? -->
  <div class="container my-5 text-center">
    <div class="card mb-3 rounded-4 border-0" style="background-color: var(--bs-secondary-color); color: var(--bs-body-bg)">
      <img src="img/ayo3.jpg" class="card-img-top rounded-top-4" alt="...">
      <div class="card-body p-5">
        <h1 class="card-title mb-5">Tunggu apa lagi?</h1>
        <p class="card-text">Ayo berwisata ke Wonosobo, wisata lebih lengkap dan ramah di kantong hanya di</p>
        <h5 class="fw-bold mb-5">WONOSOBO</h5>
        <h1 style="font-family: 'Brush Script MT', cursive;">Wonosobo, the Hidden Gem of Central Java!</h1>
      </div>
    </div>
  </div>
  <!-- End Tunggu apa lagi? -->

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

function colTodayActive($startMonth, $endMonth)
{
  // Mengatur zona waktu sesuai kebutuhan
  date_default_timezone_set('Asia/Jakarta');

  // Mendapatkan bulan hari ini dalam format m (misalnya: 01, 02, ..., 12)
  $currentMonth = date('m');

  // Periksa apakah bulan hari ini berada dalam rentang bulan yang diberikan
  if ($currentMonth >= $startMonth && $currentMonth <= $endMonth) {
    return 'active';
  } else {
    return '';
  }
}
?>