<?= $this->extend('admin/layoutAdmin'); ?>

<?= $this->section('main'); ?>

<div class="mb-3">
    <form action="<?= base_url('admin/pinjambuku/' . $pinjam['id_pinjam'] . '/update') ?>" method="POST"
        enctype="multipart/form-data" id="formTambah">

        <div class="mb-3">
            <label for="judul">Tanggal Pinjam</label>
            <input type="text" name="tgl_pinjam" id="tgl_pinjam" class="form-control"
                value="<?= $pinjam['tgl_pinjam'] ?>">
        </div>
        <div class="mb-3">
            <label for="pengarang">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="<?= $pinjam['nama'] ?>">
        </div>
        <div class="mb-3">
            <label for="penerbit">Nomor HP</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?= $pinjam['no_hp'] ?>">
        </div>
        <div class="mb-3">
            <label for="tahun">Judul Buku</label>
            <input type="text" name="judul_buku" id="judul_buku" class="form-control"
                value="<?= $pinjam['judul_buku'] ?>">
        </div>

        <div class="mb-3">
            <a href="<?= base_url('admin/pinjambuku') ?>" class="btn btn-secondary">Kembali</a>
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>