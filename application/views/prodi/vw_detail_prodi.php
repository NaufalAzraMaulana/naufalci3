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
                 if($user['role'] == 'Admin')      { ?>
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
                <?php }?>
               
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
                <div class="container-fluid">
                    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    Detail Program Studi
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title"><?= $prodi['nama']; ?></h2>
                                    <div class="row">
                                        <div class="col-md-4">ID</div>
                                        <div class="col-md-2">:</div>
                                        <div class="col-md-6"><?= $prodi['id']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">Ruangan</div>
                                        <div class="col-md-2">:</div>
                                        <div class="col-md-6"><?= $prodi['ruangan']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">Jurusan</div>
                                        <div class="col-md-2">:</div>
                                        <div class="col-md-6"><?= $prodi['jurusan']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">Akreditasi</div>
                                        <div class="col-md-2">:</div>
                                        <div class="col-md-6"><?= $prodi['akreditasi']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">Nama Kaprodi</div>
                                        <div class="col-md-2">:</div>
                                        <div class="col-md-6"><?= $prodi['nama_kaprodi']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">Tahun Berdiri</div>
                                        <div class="col-md-2">:</div>
                                        <div class="col-md-6"><?= $prodi['tahun_berdiri']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">Output Lulusan</div>
                                        <div class="col-md-2">:</div>
                                        <div class="col-md-6"><?= $prodi['output_lulusan']; ?></div>
                                    </div>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
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
        </div>

    </div>
</div>