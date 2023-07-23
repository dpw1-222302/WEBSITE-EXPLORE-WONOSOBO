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
    <title>Oleh-oleh</title>
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
                    <h1 class="mt-4">Oleh-oleh</h1>
                    <!-- isi konten mulai dari sini -->
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama Oleh-oleh</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../connect.php';
                                $query = "SELECT * FROM tabel_oleh_oleh ORDER BY oleh_oleh_id DESC";
                                $datas = $conn->query($query);
                                foreach ($datas as $data) :
                                ?>
                                    <tr>
                                        <td>
                                            <img src="<?= $data['img_oleh_oleh'] ?>" class="" alt="" style="width: 200px;">
                                        </td>
                                        <td style="width: 700px;">
                                            <?= $data['nama_oleh_oleh'] ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#showDataModal<?= $data['oleh_oleh_id'] ?>">Show</button>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editDataModal<?= $data['oleh_oleh_id'] ?>">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusDataModal<?= $data['oleh_oleh_id'] ?>">Hapus</button>
                                        </td>
                                    </tr>
                                    <!-- Modal ubah data -->
                                    <div class="modal fade bd-example-modal-lg" id="editDataModal<?= $data['oleh_oleh_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editDataModalLabel" ariahidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editDataModalLabel">Ubah Data Oleh-oleh</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="oleh_oleh/ubah.php"> <!-- arahkan ke folder yang dituju -->
                                                    <div class="modal-body">
                                                        <input type="hidden" name="oleh_oleh_id" value="<?= $data['oleh_oleh_id'] ?>">
                                                        <div class="form-group">
                                                            <label for="nama_oleh_oleh">Nama Oleh-oleh</label>
                                                            <input required type="text" class="form-control" id="nama_oleh_oleh" name="nama_oleh_oleh" value="<?= $data['nama_oleh_oleh'] ?>" autocomplete="off">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="img_oleh_oleh">Gambar</label>
                                                            <input required type="text" class="form-control" id="img_oleh_oleh" name="img_oleh_oleh" value="<?= $data['img_oleh_oleh'] ?>" autocomplete="off">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="deskripsi_oleh_oleh">Deskripsi</label>
                                                            <textarea id="deskripsi_oleh_oleh" name="deskripsidestinasi<?= $data['oleh_oleh_id'] ?>"><?= $data['deskripsi_oleh_oleh'] ?></textarea>
                                                            <script>
                                                                CKEDITOR.replace('deskripsidestinasi<?= $data['oleh_oleh_id'] ?>');
                                                            </script>
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
                                    <div class="modal fade" id="hapusDataModal<?= $data['oleh_oleh_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="hapusDataModalLabel<?= $data['oleh_oleh_id'] ?>" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusDataModalLabel<?= $data['oleh_oleh_id'] ?>">Konfirmasi Penghapusan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus data oleh-oleh ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <a href="oleh_oleh/hapus.php?id=<?= $data['oleh_oleh_id'] ?>" class="btn btn-danger">Hapus</a> <!-- arahkan ke folder yang dituju -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal show data -->
                                    <div class="modal fade bd-example-modal-lg" id="showDataModal<?= $data['oleh_oleh_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="showDataModalLabel" ariahidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="showDataModalLabel">Show Data Oleh-oleh</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="w-100" style="height: 430.875px; background-image: url(<?= $data['img_oleh_oleh'] ?>); background-size: cover;"></div>
                                                    <h2 class="my-4"><?= $data['nama_oleh_oleh'] ?></h2>
                                                    <p style="text-align: justify;"><?= $data['deskripsi_oleh_oleh'] ?></p>
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
                                        Tambah Data Oleh-oleh
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="oleh_oleh/tambah.php"> <!-- arahkan ke folder yang dituju -->
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="nama_oleh_oleh">Nama Oleh-oleh</label>
                                            <input required type="text" class="form-control" id="nama_oleh_oleh" name="nama_oleh_oleh" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="img_oleh_oleh">Gambar</label>
                                            <input required type="text" class="form-control" id="img_oleh_oleh" name="img_oleh_oleh" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi_oleh_oleh">Deskripsi</label>
                                            <textarea id="deskripsi_oleh_oleh" name="deskripsioleholeh"></textarea>
                                            <script>
                                                CKEDITOR.replace('deskripsioleholeh');
                                            </script>
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