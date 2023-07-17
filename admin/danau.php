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
    <title>Danau</title>
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
                    <h1 class="mt-4">Danau</h1>
                    <!-- isi konten mulai dari sini -->
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Danau</th>
                                    <th>Deskripsi</th>
                                    <th>Kecamatan</th>
                                    <th>Luas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../connect.php';
                                $query = "SELECT * FROM tabel_danau";
                                $datas = $conn->query($query);
                                foreach ($datas as $data) :
                                ?>
                                    <tr>
                                        <td>
                                            <?= $data['nama_danau'] ?>
                                        </td>
                                        <td>
                                            <?= $data['deskripsi_danau'] ?>
                                        </td>
                                        <td>
                                            <?= $data['kecamatan_danau'] ?>
                                        </td>
                                        <td>
                                            <?= $data['luas_danau'] ?> m<sup>2</sup>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editDataModal<?= $data['danau_id'] ?>">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusDataModal<?= $data['danau_id'] ?>">Hapus</button>
                                        </td>
                                    </tr>
                                    <!-- Modal ubah data -->
                                    <div class="modal fade" id="editDataModal<?= $data['danau_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editDataModalLabel" ariahidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editDataModalLabel">Tambah Danau</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="danau/ubah.php"> <!-- arahkan ke folder yang dituju -->
                                                    <div class="modal-body">
                                                        <input type="hidden" name="danau_id" value="<?= $data['danau_id'] ?>">
                                                        <div class="form-group">
                                                            <label for="nama_danau">Nama Danau</label>
                                                            <input required type="text" class="form-control" id="nama_danau" name="nama_danau" value="<?= $data['nama_danau'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="deskripsi_danau">Deskripsi</label>
                                                            <textarea required class="form-control" id="deskripsi_danau" rows="3" name="deskripsi_danau"><?= $data['deskripsi_danau'] ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="kecamatan_danau">Kecamatan</label>
                                                            <select required class="form-control" id="kecamatan_danau" name="kecamatan_danau">
                                                                <option value="">Pilih Kecamatan:</option>
                                                                <option value="1" <?= ($data['kecamatan_danau'] == 1) ? 'selected' : '' ?>>Kecamatan 1</option>
                                                                <option value="2" <?= ($data['kecamatan_danau'] == 2) ? 'selected' : '' ?>>Kecamatan 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="luas_danau">Luas</label>
                                                            <input required type="number" class="form-control" id="luas_danau" name="luas_danau" value="<?= $data['luas_danau'] ?>">
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
                                    <div class="modal fade" id="hapusDataModal<?= $data['danau_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusDataModalLabel<?= $data['danau_id'] ?>" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusDataModalLabel<?= $data['danau_id'] ?>">Konfirmasi Penghapusan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus data danau ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <a href="danau/hapus.php?id=<?= $data['danau_id'] ?>" class="btn btn-danger">Hapus</a> <!-- arahkan ke folder yang dituju -->
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
                    <div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahDataModalLabel">
                                        Tambah Data Danau
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="danau/tambah.php"> <!-- arahkan ke folder yang dituju -->
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nama_danau">Nama Danau</label>
                                            <input required type="text" class="form-control" id="nama_danau" name="nama_danau">
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi_danau">Deskripsi</label>
                                            <textarea required class="form-control" id="deskripsi_danau" rows="3" name="deskripsi_danau"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="kecamatan_danau">Kecamatan</label>
                                            <select required class="form-control" id="kecamatan_danau" name="kecamatan_danau">
                                                <option value="">Pilih Kecamatan:</option>
                                                <option value="1">Kecamatan 1</option>
                                                <option value="2">Kecamatan 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="luas_danau">Luas</label>
                                            <input required type="number" class="form-control" id="luas_danau" name="luas_danau">
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