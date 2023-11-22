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


                <?php
                if ($user['role'] == 'Admin') { ?>
                    <li class="active has-sub">
                        <a class="js-arrow" href="<?= base_url('mahasiswa') ?>">
                            <i class="fas fa-user"></i>Mahasiswa</a>

                    </li>
                    <li class="active has-sub">
                        <a class="js-arrow" href="<?= base_url('prodi') ?>">
                            <i class="fas fa-user"></i>Prodi</a>

                    </li>
                <?php } else {
                ?>
                    <li class="active has-sub">
                        <a class="js-arrow" href="<?= base_url('profil') ?>">
                            <i class="fas fa-user-circle"></i>Profile</a>

                    </li>
                    <li class="active has-sub">
                        <a class="js-arrow" href="<?= base_url('auth/logout') ?>">
                            <i class="zmdi zmdi-power"></i>Logout</a>

                    </li>
                <?php } ?>

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

    <!-- MAIN CONTENT-->
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
                                <div class="card-header justify-content-center">
                                    Form Tambah Data Mahasiswa
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" id="nama" placeholder="Nama">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="nim">NIM</label>
                                            <input type="text" name="nim" value="<?= set_value('nim') ?>" class="form-control" id="nim" placeholder="NIM">
                                            <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>" id="jenis_kelamin" class="form-control">
                                                <option value="">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>

                                            <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control" id="email" placeholder="Email">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="prodi">Prodi</label>
                                            <select name="prodi" value="<?= set_value('prodi') ?>" id="prodi" class="form-control">
                                                <option value="">Pilih Prodi</option>
                                                <?php foreach ($prodi as $p) : ?>
                                                    <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="asal sekolah">Asal Sekolah</label>

                                            <input type="text" name="asal_sekolah" value="<?= set_value('asal_sekolah') ?>" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                                            <?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hp">No HP</label> <input type="text" name="no_hp" value="<?= set_value('no_hp') ?>" class="form-control" id="no_hp" placeholder="No HP">
                                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat ">Alamat</label>
                                            <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control" id="alamat" placeholder="Alamat">
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a> <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                                            Mahasiswa</button>
                                    </form>
                                </div>
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



    <!-- END MAIN CONTENT-->

    <!-- END PAGE CONTAINER-->
</div>

</div>