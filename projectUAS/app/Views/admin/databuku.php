<?= $this->extend('admin/layoutAdmin'); ?>

<?= $this->section('main') ?>

<div class="container-lg">
    <h2><i class="bi bi-book-half me-2"></i>Data Buku Sigma Library</h2>

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

    <form class="col-3 d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
    </form>


    <div class="border rounded-3 p-3 mt-2 ">
        <div class="table-responsive">
            <div class="my-1">
                <button data-bs-toggle="modal" data-bs-target="#tambahModal" class="btn btn-dark mb-2"><i
                        class="bi bi-plus-lg"></i>
                    Tambah Data</button>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th>ID</th>
                        <th>Cover</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>Bahasa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($books as $buku): ?>
                        <tr>
                            <td><?= $buku['id']; ?></td>
                            <td><img src="<?= base_url($buku['cover']) ?>" alt="<?= $buku['judul'] ?>" class="img-thumbnail"
                                    style="width: 100px; height: auto"></td>
                            <td><?= $buku['judul']; ?></td>
                            <td><?= $buku['penulis']; ?></td>
                            <td><?= $buku['kategori']; ?></td>
                            <td><?= $buku['penerbit']; ?></td>
                            <td><?= $buku['tahun']; ?></td>
                            <td><?= $buku['bahasa']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/databuku/' . $buku['id'] . '/edit') ?>"
                                    class="btn btn-sm btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                <a href="<?= base_url('admin/databuku/' . $buku['id'] . '/delete') ?>"
                                    class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Modal Tambah Buku -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Tambah Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/databuku') ?>" method="POST" enctype="multipart/form-data"
                    id="formTambah">
                    <div class="mb-3">
                        <label for="cover">Cover</label>
                        <input type="file" accept="image/*" name="cover" id="cover" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="judul">Judul Buku</label>
                        <input type="text" name="judul" id="judul" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="penulis">Penulis</label>
                        <input type="text" name="penulis" id="penulis" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" id="kategori" name="kategori" required>
                            <option value="" selected disabled>Pilih Kategori Buku</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Fiksi">Fiksi</option>
                            <option value="NonFiksi">Non-Fiksi</option>
                            <option value="SeniBudaya">Seni & Budaya</option>
                            <option value="Komik">Komik</option>
                            <option value="Novel">Novel</option>
                            <option value="Agama">Agama</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="penerbit">penerbit</label>
                        <input type="text" name="penerbit" id="penerbit" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tahun">Tahun</label>
                        <input type="text" name="tahun" id="tahun" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="bahasa">Bahasa</label>
                        <input type="text" name="bahasa" id="bahasa" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="formTambah" class="btn btn-warning"><i
                        class="bi bi-floppy m-1"></i>Simpan</button>
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
                <a href="<?= base_url('admin/databuku/' . $buku['id'] . '/delete') ?>" type="button"
                    class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>