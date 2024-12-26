<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SigmaLibrary</title>
    <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('/assets/css/stylesidebar.css'); ?>">
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="flex flex-column">
            <div href="#" class="nav-link-admin">
                <span class="icon">
                    <i class="bi bi-person-circle"></i>
                </span>
                <span class="description-admin">Admin</span>
            </div>
            <hr class="custom-hr">

            <a href="home" class="nav-link">
                <span class="icon">
                    <i class="bi bi-house-fill"></i></i>
                </span>
                <span class="description">Home</span>
            </a>
            <a href="dashboard" class="nav-link">
                <span class="icon">
                    <i class="bi bi-speedometer2"></i>
                </span>
                <span class="description">Dashboard</span>
            </a>

            <!-- Collapse Submenu -->
            <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#submenu" aria-expanded="false"
                aria-controls="submenu">
                <span class="icon">
                    <i class="bi bi-book"></i>
                </span>
                <span class="description">Buku <i class="bi bi-caret-down-fill"></i></span>
            </a>

            <div class="sub-menu collapse" id="submenu">
                <a href="databuku" class="nav-link">
                    <span class="icon">
                        <i class="bi bi-book-fill"></i>
                    </span>
                    <span class="description">Data Buku</span>
                </a>
                <a href="pinjambuku" class="nav-link">
                    <span class="icon">
                        <i class="bi bi-journal-arrow-up"></i>
                    </span>
                    <span class="description">Peminjaman Buku</span>
                </a>
            </div>

            <a href="#" class="nav-link">
                <span class="icon">
                    <i class="bi bi-person"></i>
                </span>
                <span class="description">Customers</span>
            </a>
        </nav>
    </div>

    <!-- Content -->
    <main class="main-content">
        <?= $this->renderSection('main'); ?>

    </main>

    <script src="<?= base_url('/assets/js/bootstrap.bundle.js') ?>"></script>
</body>

</html>