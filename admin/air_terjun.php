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
    <title>Air Terjun</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
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
                    <h1 class="mt-4">Air Terjun</h1>
                    <!-- isi konten mulai dari sini -->
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>gambar</th>
                                    <th>Nama Air Terjun</th>
                                    <th>Ketinggian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../connect.php';
                                $query = "SELECT * FROM tabel_air_terjun ORDER BY air_terjun_id DESC";
                                $datas = $conn->query($query);
                                foreach ($datas as $data) :
                                ?>
                                    <tr>
                                        <td>
                                            <img src="<?= $data['img_air_terjun'] ?>" alt="" style="width: 200px;">
                                        </td>
                                        <td style="width: 500px;">
                                            <?= $data['nama_air_terjun'] ?>
                                        </td>
                                        <td>
                                            <?= number_format($data['ketinggian_air_terjun'], 0, ',', '.') ?> Meter
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#showDataModal<?= $data['air_terjun_id'] ?>">Show</button>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editDataModal<?= $data['air_terjun_id'] ?>">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusDataModal<?= $data['air_terjun_id'] ?>">Hapus</button>
                                        </td>
                                    </tr>
                                    <!-- Modal ubah data -->
                                    <div class="modal fade bd-example-modal-lg" id="editDataModal<?= $data['air_terjun_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editDataModalLabel" ariahidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editDataModalLabel">Ubah Data Air Terjun</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="air_terjun/ubah.php"> <!-- arahkan ke folder yang dituju -->
                                                    <div class="modal-body">
                                                        <input type="hidden" name="air_terjun_id" value="<?= $data['air_terjun_id'] ?>">
                                                        <div class="form-group">
                                                            <label for="img_air_terjun">Gambar</label>
                                                            <input required type="text" class="form-control" id="img_air_terjun" name="img_air_terjun" value="<?= $data['img_air_terjun'] ?>" autocomplete="off">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_air_terjun">Nama Air Terjun</label>
                                                            <input required type="text" class="form-control" id="nama_air_terjun" name="nama_air_terjun" value="<?= $data['nama_air_terjun'] ?>" autocomplete="off">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="deskripsi_air_terjun">Deskripsi</label>
                                                            <textarea id="deskripsi_air_terjun" name="deskripsiairterjun<?= $data['air_terjun_id'] ?>"><?= $data['deskripsi_air_terjun'] ?></textarea>
                                                            <script>
                                                                CKEDITOR.replace('deskripsiairterjun<?= $data['air_terjun_id'] ?>');
                                                            </script>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ketinggian_air_terjun">Ketinggian</label>
                                                            <input required type="number" class="form-control" id="ketinggian_air_terjun" name="ketinggian_air_terjun" value="<?= $data['ketinggian_air_terjun'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_google_maps_air_terjun">Link Google Maps</label>
                                                            <textarea required class="form-control" id="link_google_maps_air_terjun" name="link_google_maps_air_terjun"><?= $data['link_google_maps_air_terjun'] ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus Data -->
                                    <div class="modal fade" id="hapusDataModal<?= $data['air_terjun_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusDataModalLabel<?= $data['air_terjun_id'] ?>" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusDataModalLabel<?= $data['air_terjun_id'] ?>">Konfirmasi Penghapusan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus data air terjun ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <a href="air_terjun/hapus.php?id=<?= $data['air_terjun_id'] ?>" class="btn btn-danger">Hapus</a> <!-- arahkan ke folder yang dituju -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal show data -->
                                    <div class="modal fade bd-example-modal-lg" id="showDataModal<?= $data['air_terjun_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="showDataModalLabel" ariahidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="showDataModalLabel">Show Data Air terjun</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="w-100" style="height: 430.875px; background-image: url(<?= $data['img_air_terjun'] ?>); background-size: cover;"></div>
                                                    <h2 class="my-4"><?= $data['nama_air_terjun'] ?></h2>
                                                    <p class="mb-3">Tinggi: <?= number_format($data['ketinggian_air_terjun'], 0, ',', '.') ?> Meter</p>
                                                    <p style="text-align: justify;"><?= $data['deskripsi_air_terjun'] ?></p>
                                                    <textarea class="form-control" rows="6" disabled><?= $data['link_google_maps_air_terjun'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahDataModal">
                        Tambah Data
                    </button>
                    <!-- Modal tambah data -->
                    <div class="modal fade bd-example-modal-lg" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahDataModalLabel">
                                        Tambah Data Air Terjun
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="air_terjun/tambah.php"> <!-- arahkan ke folder yang dituju -->
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="img_air_terjun">Gambar</label>
                                            <input required type="text" class="form-control" id="img_air_terjun" name="img_air_terjun" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_air_terjun">Nama Air Terjun</label>
                                            <input required type="text" class="form-control" id="nama_air_terjun" name="nama_air_terjun" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi_air_terjun">Deskripsi</label>
                                            <textarea id="deskripsi_air_terjun" name="deskripsiairterjun"></textarea>
                                            <script>
                                                CKEDITOR.replace('deskripsiairterjun');
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label for="ketinggian_air_terjun">Ketinggian</label>
                                            <input required type="number" class="form-control" id="ketinggian_air_terjun" name="ketinggian_air_terjun">
                                        </div>
                                        <div class="form-group">
                                            <label for="link_google_maps_air_terjun">Link Google Maps</label>
                                            <textarea required class="form-control" id="link_google_maps_air_terjun" name="link_google_maps_air_terjun"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
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