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
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1"><?= $judul; ?></h2>
                        </div>
                    </div>
                </div><br><br><br>
                <!-- Tambahkan tombol Tambah Mahasiswa di bawah overview -->
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?= base_url('lomba/tambahlomba') ?>" class="au-btn au-btn-icon au-btn--green">
                            <i class="zmdi zmdi-plus"></i> Daftar Lomba
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive m-t-20">
                            <?= $this->session->flashdata('message'); ?>
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Lomba</th>
                                        <th>Tanggal Lomba</th>
                                        <th>Lokasi Lomba</th>
                                        <!-- <th>Deskripsi Lomba</th> -->
                                        <th>Biaya Pendaftaran</th>
                                        <th>Gambar Lomba</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loop melalui data lomba dari database dan menampilkannya dalam tabel -->
                                    <?php foreach ($lombaa as $lomba) : ?>
                                        <tr>
                                            <td><?= $lomba['id_lomba']; ?></td>
                                            <td><?= $lomba['nama_lomba']; ?></td>
                                            <td><?= $lomba['tanggal']; ?></td>
                                            <td><?= $lomba['lokasi']; ?></td>
                                            <!-- <td><?= $lomba['deskripsi']; ?></td> -->
                                            <td><?= $lomba['biaya_pendaftaran']; ?></td>
                                            <td><img src="<?= base_url('assets/images/lomba/') . $lomba['gambar_lomba'];?>" style="width: 100px;" class="img-thumbnail"></td>
                                            <td>
                                                <!-- Tombol aksi (misalnya: Edit dan Hapus) -->
                                                <a href="<?= base_url('lomba/detail/' . $lomba['id_lomba']) ?>" class="btn btn-sm btn-success">Detail</a>
                                                <a href="<?= base_url('lomba/editlomba/' . $lomba['id_lomba']) ?>" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="<?= base_url('lomba/hapus/' . $lomba['id_lomba']) ?>" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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