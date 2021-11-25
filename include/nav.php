      <div class="navbar-bg" style="background: linear-gradient(40deg, #FF5722, #FF9800)"></div>
      <nav class="navbar navbar-expand-lg main-navbar" style="background: linear-gradient(40deg, #FF5722, #FF9800)">
        <div class="container">
          <a href="/" class="navbar-brand sidebar-gone-hide"><i class="fa fa-shopping-basket mr-3"></i><?= $judul; ?></a>
          <div class="navbar-nav">
            <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
          </div>
          <ul class="navbar-nav navbar-right ml-auto">
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="<?= $link; ?>/assets/img/profile.jpeg" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block"><?= $_SESSION['username']; ?></div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="<?= $link; ?>/pengaturan" class="dropdown-item has-icon">
                  <i class="fas fa-cog"></i> Pengaturan
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?= $link; ?>/logout" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="<?= $link; ?>" class="nav-link"><i class="fa fa-home"></i><span>Dashboard</span></a>
            </li>
            <?php if ($dataUser['level'] === "Admin"): ?>
            <li class="nav-item">
              <a href="<?= $link; ?>/admin" class="nav-link"><i class="fa fa-star"></i><span>Admin</span></a>
            </li>
            <?php endif ?>
            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fa fa-shopping-basket"></i><span>Pembelian</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="<?= $link; ?>/pembelian" class="nav-link">Pembelian Baru</a></li>
                <li class="nav-item"><a href="<?= $link; ?>/riwayat-pembelian" class="nav-link">Riwayat Pembelian</a></li>
                <li class="nav-item"><a href="<?= $link; ?>/daftar-layanan" class="nav-link">Daftar Layanan</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fa fa-money-bill-wave"></i><span>Deposit Saldo</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="<?= $link; ?>/deposit-saldo" class="nav-link">Deposit Saldo</a></li>
                <li class="nav-item"><a href="<?= $link; ?>/riwayat-deposit" class="nav-link">Riwayat Deposit</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="<?= $link; ?>/riwayat-saldo" class="nav-link"><i class="fa fa-wallet"></i><span>Riwayat Saldo</span></a>
            </li>
            <li class="nav-item">
              <a href="<?= $link; ?>/kontak-kami" class="nav-link"><i class="fa fa-phone"></i><span>Kontak Kami</span></a>
            </li>
            <li class="nav-item">
              <a href="<?= $link; ?>/ticket" class="nav-link"><i class="fa fa-envelope"></i><span>Ticket Support</span></a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="fa fa-file"></i><span>Halaman</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="<?= $link; ?>/syarat-ketentuan" class="nav-link">Syarat & Ketentuan</a></li>
                <li class="nav-item"><a href="<?= $link; ?>/pertanyaan-umum" class="nav-link">Pertanyaan Umum</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>