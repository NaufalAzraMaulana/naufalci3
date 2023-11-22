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



                <li class="active has-sub">
                    <a class="js-arrow" href="<?= base_url('mahasiswa') ?>">
                        <i class="fas fa-user"></i>Mahasiswa</a>

                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="<?= base_url('prodi') ?>">
                        <i class="fas fa-user"></i>Prodi</a>

                </li>

                <!-- <li class="active has-sub">
                    <a class="js-arrow" href="<?= base_url('profil') ?>">
                    <i class="fas fa-user-circle"></i>Profile</a>
                    
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="<?= base_url('auth/logout') ?>">
                    <i class="zmdi zmdi-power"></i>Logout</a>
                    
                </li> -->


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
                                    Form Ubah Data Program Studi
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="">
                                        <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                                        <div class="form-group">
                                            <label for="nama">Nama Program Studi</label>
                                            <input type="text" name="nama" value="<?= $prodi['nama']; ?>" class="form-control" id="nama" placeholder="Nama Program Studi">
                                            <small class="text-danger"><?= form_error('nama'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="ruangan">Ruangan</label>
                                            <input type="text" name="ruangan" value="<?= $prodi['ruangan']; ?>" class="form-control" id="ruangan" placeholder="Ruangan">
                                            <small class="text-danger"><?= form_error('ruangan'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan</label>
                                            <input type="text" name="jurusan" value="<?= $prodi['jurusan']; ?>" class="form-control" id="jurusan" placeholder="Jurusan">
                                            <small class="text-danger"><?= form_error('jurusan'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="akreditasi">Akreditasi</label>
                                            <input type="text" name="akreditasi" value="<?= $prodi['akreditasi']; ?>" class="form-control" id="akreditasi" placeholder="Akreditasi">
                                            <small class="text-danger"><?= form_error('akreditasi'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_kaprodi">Nama Kaprodi</label>
                                            <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">
                                            <small class="text-danger"><?= form_error('nama_kaprodi'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun_berdiri">Tahun Berdiri</label>
                                            <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                                            <small class="text-danger"><?= form_error('tahun_berdiri'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="output_lulusan">Output Lulusan</label>
                                            <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>" class="form-control" id="output_lulusan" placeholder="Output Lulusan">
                                            <small class="text-danger"><?= form_error('output_lulusan'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <img src="<?= base_url('assets/images/prodi/') . $prodi['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                                <label class="custom-file-label" for="gambar">Choose File</label>
                                                <?= form_error('gambar', '<small class="text-danger pt-3">', '</small>'); ?>
                                            </div>
                                        </div>

                                        <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Program Studi</button>
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