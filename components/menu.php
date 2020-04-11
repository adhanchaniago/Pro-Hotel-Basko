<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Basko Premier Hotel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php if ($_SESSION['akun']->pengguna_level == "Admin") : ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=module/Pengguna/index"><b>Pengguna</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=module/Tipe/index"><b>Tipe Kamar</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=module/Kamar/index"><b>Kamar</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=module/Reservasi/index"><b class="text-primary">Reservasi</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=module/Kamar/kamar_kosong"><b class="text-success">Kamar Kosong</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=module/Laporan/index"><b class="text-info">Laporan</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=module/Logout/index"><b class="text-danger">Logout</b></a>
                    </li>
                <?php endif ?>
                <?php if ($_SESSION['akun']->pengguna_level == "Pimpinan") : ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=module/Laporan/index"><b class="text-info">Laporan</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=module/Logout/index"><b class="text-danger">Logout</b></a>
                    </li>
                <?php endif ?>
                <?php if ($_SESSION['akun']->pengguna_level == "Frontline") : ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=module/Reservasi/index"><b class="text-primary">Reservasi</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=module/Kamar/kamar_kosong"><b class="text-success">Kamar Kosong</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=module/Logout/index"><b class="text-danger">Logout</b></a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>