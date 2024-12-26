<?= $this->extend('layout'); ?>

<?= $this->section('main') ?>

<div class="container-lg">

    <div class="border rounded-3 p-4 mt-4">

        <!-- Corousel -->
        <div id="carouselExampleIndicators" class="carousel slide mb-4">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="max-width: auto" src="<?= base_url('/assets/images/welcome.png'); ?>"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="max-width: auto" src="<?= base_url('/assets/images/cor-1.jpg'); ?>"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="max-width: auto" src="<?= base_url('/assets/images/banner3.jpg'); ?>"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="row">
            <div class="col-6">
                <h4>Buku Yang Tersedia</h4>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <div class="mb-2 me-2">
                    <input type="text" name="judul" id="cari" placeholder="Judul Buku" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </div>

            <hr>
            <div class="row mt-2">

                <!-- Sidebar -->
                <div class="col-12 col-md-3">
                    <div class="sidebar-home bg-dark p-3">
                        <h4 class="text-white mb-4">Menu</h4>
                        <hr class="custom-hr">

                        <ul class="sidebar-menu list-unstyled">
                            <li><a href="#" class="sidebar-link"><i class="bi bi-house me-1"></i>Home</a></li>
                            <li><a href="#" class="sidebar-link"><i class="bi bi-list-task me-1"></i>Daftar Buku</a>
                            </li>
                            <li><a href="#" class="sidebar-link"><i class="bi bi-bookmarks me-1"></i>Kategori</a></li>
                        </ul>
                    </div>
                </div>


                <!-- Card -->
                <div class="col-12 col-md-9">
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="card">
                                <img src="/assets/images/1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Pendidikan Karakter</h5>
                                    <p class="card-text">Kategori :</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="card">
                                <img src="<?= base_url() ?>/assets/images/2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Laut Kawah Saham</h5>
                                    <p class="card-text">Kategori :</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="card">
                                <img src="<?= base_url() ?>/assets/images/3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Liburan</h5>
                                    <p class="card-text">Kategori :</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="card">
                                <img src="<?= base_url() ?>/assets/images/4.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Pemograman Lanjut</h5>
                                    <p class="card-text">Kategori :</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="card">
                                <img src="<?= base_url() ?>/assets/images/5.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">86 -Eighty Six-</h5>
                                    <p class="card-text">Kategori :</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="card">
                                <img src="<?= base_url() ?>/assets/images/6.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kisah Nabi Muhammada SAW</h5>
                                    <p class="card-text">Kategori :</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="card">
                                <img src="<?= base_url() ?>/assets/images/7.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Modul Matematika</h5>
                                    <p class="card-text">Kategori :</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="card">
                                <img src="<?= base_url() ?>/assets/images/8.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Pemograman Pemula</h5>
                                    <p class="card-text">Kategori :</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="card">
                                <img src="<?= base_url() ?>/assets/images/9.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Naruto</h5>
                                    <p class="card-text">Kategori :</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="card">
                                <img src="<?= base_url() ?>/assets/images/10.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Black Clover</h5>
                                    <p class="card-text">Kategori :</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="card">
                                <img src="<?= base_url() ?>/assets/images/11.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tensura</h5>
                                    <p class="card-text">Kategori :</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 p-3">
                            <div class="card">
                                <img src="<?= base_url() ?>/assets/images/12.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Bapak Pendidikan</h5>
                                    <p class="card-text">Kategori :</p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>