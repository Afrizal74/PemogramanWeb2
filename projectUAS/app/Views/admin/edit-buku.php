<?= $this->extend('admin/layoutAdmin'); ?>

<?= $this->section('main'); ?>

<div class="mb-3">
    <form action="<?= base_url('admin/databuku/' . $buku['id'] . '/update') ?>" method="POST"
        enctype="multipart/form-data" id="formTambah">
        <div class="mb-3">
            <label for="tahun">Cover</label>
            <input type="file" accept="image/*" name="cover" id="cover" class="form-control">
            <img src="<?= base_url($buku['cover']) ?>" alt="" class="img=thumbnail" style="width: 100px; height: auto;">
        </div>
        <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="<?= $buku['judul'] ?>">
        </div>
        <div class="mb-3">
            <label for="pengarang">Penulis</label>
            <input type="text" name="penulis" id="penulis" class="form-control" value="<?= $buku['penulis'] ?>">
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" id="kategori" name="kategori" required>
                <option value="" disabled>Pilih Kategori Buku</option>
                <option value="Pendidikan" <?= ($buku['kategori'] == 'Pendidikan') ? 'selected' : '' ?>>Pendidikan</option>
                <option value="Fiksi" <?= ($buku['kategori'] == 'Fiksi') ? 'selected' : '' ?>>Fiksi</option>
                <option value="Non-Fiksi" <?= ($buku['kategori'] == 'Non-Fiksi') ? 'selected' : '' ?>>Non-Fiksi</option>
                <option value="Seni & Budaya" <?= ($buku['kategori'] == 'Seni & Budaya') ? 'selected' : '' ?>>Seni & Budaya
                </option>
                <option value="Komik" <?= ($buku['kategori'] == 'Komik') ? 'selected' : '' ?>>Komik</option>
                <option value="Novel" <?= ($buku['kategori'] == 'Novel') ? 'selected' : '' ?>>Novel</option>
                <option value="Agama" <?= ($buku['kategori'] == 'Agama') ? 'selected' : '' ?>>Agama</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control" value="<?= $buku['penerbit'] ?>">
        </div>
        <div class="mb-3">
            <label for="tahun">Tahun</label>
            <input type="text" name="tahun" id="tahun" class="form-control" value="<?= $buku['tahun'] ?>">
        </div>
        <div class="mb-3">
            <label for="tahun">Bahasa</label>
            <input type="text" name="bahasa" id="bahasa" class="form-control" value="<?= $buku['bahasa'] ?>">
        </div>

        <div class="mb-3">
            <a href="<?= base_url('admin/databuku') ?>" class="btn btn-secondary">Kembali</a>
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>