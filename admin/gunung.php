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
    <title>Gunung</title>
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
                    <h1 class="mt-4">Gunung</h1>
                    <!-- isi konten mulai dari sini -->
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama Gunung</th>
                                    <th>Ketinggian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../connect.php';
                                $query = "SELECT * FROM tabel_gunung ORDER BY gunung_id DESC";
                                $datas = $conn->query($query);
                                foreach ($datas as $data) :
                                ?>
                                    <tr>
                                        <td>
                                            <img src="<?= $data['img_gunung'] ?>" alt="" style="width: 200px;">
                                        </td>
                                        <td style="width: 500px;">
                                            <?= $data['nama_gunung'] ?>
                                        </td>
                                        <td>
                                            <?= number_format($data['ketinggian_gunung'], 0, ',', '.') ?> MDPL
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#showDataModal<?= $data['gunung_id'] ?>">Show</button>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editDataModal<?= $data['gunung_id'] ?>">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusDataModal<?= $data['gunung_id'] ?>">Hapus</button>
                                        </td>
                                    </tr>
                                    <!-- Modal ubah data -->
                                    <div class="modal fade bd-example-modal-lg" id="editDataModal<?= $data['gunung_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editDataModalLabel" ariahidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editDataModalLabel">Ubah Data Gunung</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="gunung/ubah.php"> <!-- arahkan ke folder yang dituju -->
                                                    <div class="modal-body">
                                                        <input type="hidden" name="gunung_id" value="<?= $data['gunung_id'] ?>">
                                                        <div class="form-group">
                                                            <label for="img_gunung">Gambar</label>
                                                            <input required type="text" class="form-control" id="img_gunung" name="img_gunung" value="<?= $data['img_gunung'] ?>" autocomplete="off">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_gunung">Nama Gunung</label>
                                                            <input required type="text" class="form-control" id="nama_gunung" name="nama_gunung" value="<?= $data['nama_gunung'] ?>" autocomplete="off">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="deskripsi_gunung">Deskripsi</label>
                                                            <textarea id="deskripsi_gunung" name="deskripsigunung<?= $data['gunung_id'] ?>"><?= $data['deskripsi_gunung'] ?></textarea>
                                                            <script>
                                                                CKEDITOR.replace('deskripsigunung<?= $data['gunung_id'] ?>');
                                                            </script>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ketinggian_gunung">Ketinggian</label>
                                                            <input required type="number" class="form-control" id="ketinggian_gunung" name="ketinggian_gunung" value="<?= $data['ketinggian_gunung'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="link_google_maps_gunung">Link Google Maps</label>
                                                            <textarea required class="form-control" id="link_google_maps_gunung" name="link_google_maps_gunung"><?= $data['link_google_maps_gunung'] ?></textarea>
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
                                    <div class="modal fade" id="hapusDataModal<?= $data['gunung_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusDataModalLabel<?= $data['gunung_id'] ?>" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusDataModalLabel<?= $data['gunung_id'] ?>">Konfirmasi Penghapusan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus data gunung ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <a href="gunung/hapus.php?id=<?= $data['gunung_id'] ?>" class="btn btn-danger">Hapus</a> <!-- arahkan ke folder yang dituju -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal show data -->
                                    <div class="modal fade bd-example-modal-lg" id="showDataModal<?= $data['gunung_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="showDataModalLabel" ariahidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="showDataModalLabel">Show Data Gunung</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="w-100" style="height: 430.875px; background-image: url(<?= $data['img_gunung'] ?>); background-size: cover;"></div>
                                                    <h2 class="my-4"><?= $data['nama_gunung'] ?></h2>
                                                    <p class="mb-3"><?= number_format($data['ketinggian_gunung'], 0, ',', '.') ?> MDPL</p>
                                                    <p style="text-align: justify;"><?= $data['deskripsi_gunung'] ?></p>
                                                    <textarea class="form-control" rows="6" disabled><?= $data['link_google_maps_gunung'] ?></textarea>
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
                                        Tambah Data Gunung
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="gunung/tambah.php"> <!-- arahkan ke folder yang dituju -->
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="img_gunung">Gambar</label>
                                            <input required type="text" class="form-control" id="img_gunung" name="img_gunung" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_gunung">Nama Gunung</label>
                                            <input required type="text" class="form-control" id="nama_gunung" name="nama_gunung" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi_gunung">Deskripsi</label>
                                            <textarea id="deskripsi_gunung" name="deskripsigunung"></textarea>
                                            <script>
                                                CKEDITOR.replace('deskripsigunung');
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label for="ketinggian_gunung">Ketinggian</label>
                                            <input required type="number" class="form-control" id="ketinggian_gunung" name="ketinggian_gunung">
                                        </div>
                                        <div class="form-group">
                                            <label for="link_google_maps_gunung">Link Google Maps</label>
                                            <textarea required class="form-control" id="link_google_maps_gunung" name="link_google_maps_gunung"></textarea>
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