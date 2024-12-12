<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/databuku') ?>">Data Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/transaksi') ?>">Data Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/pelanggan') ?>">Data Pelanggan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <!-- Start Tabel -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Tanggal Transaksi</th>
                        <th scope="col">Buku</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Kamis, 5 Desember 2024</td>
                        <td>Bumi Manusia</td>
                        <td>Eka Purnama</td>
                        <td>Sukses</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal" type="button"
                                class="btn btn-primary">Edit</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#hapusModal" type="button"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jumat, 6 Desember 2024</td>
                        <td>Laskar Pelangi</td>
                        <td>Indo Masse</td>
                        <td>Sukses</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal" type="button"
                                class="btn btn-primary">Edit</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#hapusModal" type="button"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Sabtu, 7 Desember 2024</td>
                        <td>The Coldest Boyfriend</td>
                        <td>Aisyipa Arum</td>
                        <td>Sukses</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal" type="button"
                                class="btn btn-primary">Edit</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#hapusModal" type="button"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Minggu, 8 Desember 2024</td>
                        <td>Tentang Kamu</td>
                        <td>Julia Herwanda</td>
                        <td>Sukses</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal" type="button"
                                class="btn btn-primary">Edit</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#hapusModal" type="button"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Senin, 9 Desember 2024</td>
                        <td>Pulang Pergi</td>
                        <td>Mamat Tatang</td>
                        <td>Sukses</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal" type="button"
                                class="btn btn-primary">Edit</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#hapusModal" type="button"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Selasa, 10 Desember 2024</td>
                        <td>The Start and I</td>
                        <td>Supratman</td>
                        <td>Sukses</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#editModal" type="button"
                                class="btn btn-primary">Edit</a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#hapusModal" type="button"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End Tabel -->

            <!-- Modal Edit -->
            <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="tgl-transaksi" class="col-form-label">Tanggal Transaksi</label>
                                    <input type="text" class="form-control" id="tgl-transaksi">
                                </div>
                                <div class="mb-3">
                                    <label for="buku" class="col-form-label">Buku</label>
                                    <input type="text" class="form-control" id="buku">
                                </div>
                                <div class="mb-3">
                                    <label for="pelanggan" class="col-form-label">Pelanggan</label>
                                    <input type="text" class="form-control" id="pelanggan">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="col-form-label">Status</label>
                                    <select class="form-select form-select-sm" aria-label="Small select example">
                                        <option selected>Pilih Salah Satu</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Sukses</option>
                                        <option value="3">Error</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-success">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Edit -->

            <!-- Modal Hapus -->
            <div class="modal fade" id="hapusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin menghapus data ini?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Hapus -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>