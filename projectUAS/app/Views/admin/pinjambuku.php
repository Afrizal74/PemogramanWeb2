<?= $this->extend('admin/layoutAdmin'); ?>

<?= $this->section('main') ?>

<div class="container-lg">
    <h3><i class="bi bi-book-half me-2"></i>Sigma Library</h3>

    <?php if (session('sukses')): ?>
        <div class="mb-3">
            <div class="alert alert-success">
                <strong>Sukses</strong> <?= session('sukses') ?>
            </div>
        </div>
    <?php endif ?>

    <?php if (session('gagal')): ?>
        <div class="mb-3">
            <div class="alert alert-success">
                <strong>Gagal</strong> <?= session('gagal') ?>
            </div>
        </div>
    <?php endif ?>

    <div class="border rounded-3 p-3 mt-2">
        <div class="table-responsive">

            <div class="row mb-3">

                <div class="col-9 my-1">
                    <button data-bs-toggle="modal" data-bs-target="#tambahModal" class="btn btn-dark mb-2">
                        <i class="bi bi-plus-lg"></i> Tambah Data
                    </button>
                </div>

                <div class="col-3 my-1">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <hr>

            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th>No</th>
                        <th>Tanggal Pinjam</th>
                        <th>Nama</th>
                        <th>No Hp</th>
                        <th>Judul Buku Dipinjam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peminjaman as $pinjam): ?>
                        <tr>
                            <td><?= $pinjam['id_pinjam']; ?></td>
                            <td><?= $pinjam['tgl_pinjam']; ?></td>
                            <td><?= $pinjam['nama']; ?></td>
                            <td><?= $pinjam['no_hp']; ?></td>
                            <td><?= $pinjam['judul_buku']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/pinjambuku/' . $pinjam['id_pinjam'] . '/edit') ?>"
                                    class="btn btn-sm btn-secondary me-1"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?= base_url('admin/pinjambuku/' . $pinjam['id_pinjam'] . '/delete') ?>"
                                    class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Modal Pinjam -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPinjamModalLabel">Form Peminjaman Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/pinjambuku') ?>" method="POST" enctype="multipart/form-data"
                    id="formTambah">

                    <!-- Input Tanggal Pinjam -->
                    <div class="mb-3">
                        <label for="pinjam_date" class="form-label">Tanggal Pinjam</label>
                        <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
                    </div>

                    <!-- Input Nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <!-- Input Nomor HP -->
                    <div class="mb-3">
                        <label for="nomor_hp" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
                    </div>

                    <!-- Input Judul Buku -->
                    <div class="mb-3">
                        <label for="judul_buku" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Hapus -->
<div class="modal fade" id="hapusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Buku</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <a href="<?= base_url('admin/pinjambuku/' . $pinjam['id_pinjam'] . '/delete') ?>" type="button"
                    class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>