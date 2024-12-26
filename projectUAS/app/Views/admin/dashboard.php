<?= $this->extend('admin/layoutAdmin'); ?>

<?= $this->section('main') ?>

<!-- app/Views/admin/dashboard.php -->
<?= $this->extend('admin/layoutAdmin'); ?>

<?= $this->section('main'); ?>

<h2><i class="bi bi-book-half me-2"></i>Dashboard Admin</h2>
<div class="container mt-5">

    <div class="row">
        <!-- Card Jumlah Data Buku -->
        <div class="col-md-6 mb-4">
            <div class="card border-warning border-4">
                <div class="card-header">
                    <h4>Total Data Buku</h4>
                </div>
                <div class="card-body">
                    <h3 class="text-center"><?= $totalBuku; ?> Buku</h3>
                    <p class="text-center">
                        <a href="<?= base_url('admin/databuku'); ?>" class="btn btn-secondary">Lihat Data Buku</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Card Jumlah Data Pinjam Buku -->
        <div class="col-md-6 mb-4">
            <div class="card border-warning border-4">
                <div class="card-header">
                    <h4>Total Data Pinjam Buku</h4>
                </div>
                <div class="card-body">
                    <h3 class="text-center"><?= $totalPinjam; ?> Peminjaman Buku</h3>
                    <p class="text-center">
                        <a href="<?= base_url('admin/pinjambuku'); ?>" class="btn btn-secondary">Lihat Data
                            Peminjaman</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>


<?= $this->endSection(); ?>