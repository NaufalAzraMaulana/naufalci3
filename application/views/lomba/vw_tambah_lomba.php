<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#" style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold; text-decoration: none; color: #333;">
            Sistem Akademik
        </a>
    </div>

    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">




                <!-- <li class="active has-sub">
                    <a class="js-arrow" href="<?= base_url('mahasiswa') ?>">
                        <i class="fas fa-user"></i>Mahasiswa</a>

                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="<?= base_url('prodi') ?>">
                        <i class="fas fa-user"></i>Prodi</a>

                </li> -->

                <li class="active has-sub">
                    <a class="js-arrow" href="<?= base_url('profil') ?>">
                        <i class="fas fa-user-circle"></i>Profile</a>

                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="<?= base_url('lomba') ?>">
                        <i class="fas fa-trophy"></i>Lomba</a>
                </li>

                <li class="active has-sub">
                    <a class="js-arrow" href="<?= base_url('auth/logout') ?>">
                        <i class="zmdi zmdi-power"></i>Logout</a>

                </li>


            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->

<!-- PAGE CONTAINER-->
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="header-wrap">
                    <form class="form-header" action="" method="POST">
                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                        <button class="au-btn--submit" type="submit">
                            <i class="zmdi zmdi-search"></i>
                        </button>
                    </form>
                    <div class="header-button">
                        <div class="noti-wrap">



                        </div>
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="image">
                                    <img src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?= $user['nama']; ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">

                                    <div class="account-dropdown__body">

                                        <div class="account-dropdown__footer">
                                            <a href="<?= base_url('Auth/logout') ?>">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                            <a href="<?= base_url('Profil') ?>">
                                                <i class="fas fa-user-circle"></i>Profile</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <!-- HEADER DESKTOP-->
    <!-- HEADER DESKTOP-->

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1"><?= $judul; ?></h2>
                            <!-- <button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>add item
                        </button> -->
                        </div>
                    </div>
                </div><br><br><br>
                <!-- Tambahkan tombol Tambah Mahasiswa di bawah overview -->
                <div class="container-fluid">


                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    Form Daftar Lomba
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="nama_lomba">Nama Lomba</label>
                                            <input type="text" name="nama_lomba" value="<?= set_value('nama_lomba') ?>" class="form-control" id="nama_lomba" placeholder="Nama Lomba">
                                            <?= form_error('nama_lomba', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal Lomba</label>
                                            <input type="date" name="tanggal" value="<?= set_value('tanggal') ?>" class="form-control" id="tanggal">
                                            <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="lokasi">Lokasi Lomba</label>
                                            <input type="text" name="lokasi" value="<?= set_value('lokasi') ?>" class="form-control" id="lokasi" placeholder="Lokasi Lomba">
                                            <?= form_error('lokasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi Lomba</label>
                                            <textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi Lomba"><?= set_value('deskripsi') ?></textarea>
                                            <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="biaya_pendaftaran">Biaya Pendaftaran</label>
                                            <input type="text" name="biaya_pendaftaran" value="<?= set_value('biaya_pendaftaran') ?>" class="form-control" id="biaya_pendaftaran" placeholder="Biaya Pendaftaran">
                                            <?= form_error('biaya_pendaftaran', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="gambar_lomba">Gambar Lomba</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" value="<?= set_value('gambar_lomba') ?>" name="gambar_lomba" id="gambar_lomba">
                                                <label for="gambar_lomba" class="custom-file-label">Pilih Berkas</label>
                                            </div>
                                        </div>
                                        <a href="<?= base_url('Lomba') ?>" class="btn btn-danger">Tutup</a>
                                        <button type="submit" name="daftar" class="btn btn-primary float-right">Daftar Lomba</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer">
                            <footer class="white-background">
                                <!-- Add your footer content here -->
                                <p>&copy; 2023 Your Company Name. All rights reserved.</p>
                            </footer>
                        </div>
                    </div>
                </div>

            </div>
        </div>







        