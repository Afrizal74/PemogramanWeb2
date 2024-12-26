<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/stylesidebar.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <nav class="navbar bg-dark navbar-expand-md" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-book-half me-2 ms-2"></i>Sigma Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Edit Profil</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/logout'); ?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="ms-auto ps-4">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href=""><img class="rounded-circle"
                                src="<?= base_url('/assets/images/avatar-4.png'); ?>" alt="Icon-profil" width="40px"
                                height="40px"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('main'); ?>

    <footer class="p-5 bg-dark text-light mt-5 text-center ">
        &copy; 2024. Afrizaldi UAS Pemograman Web 2. All right reversed.
    </footer>



    <script src="<?= base_url('/assets/js/bootstrap.bundle.js') ?>"></script>
</body>

</html>