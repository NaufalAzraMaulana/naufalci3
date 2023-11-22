<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#" style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold; text-decoration: none; color: #333;">
                                Sistem Akademik
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?= base_url('auth/registrasi') ?>" method="post">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input class="au-input au-input--full" type="text" name="nama" placeholder="Nama Lengkap">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Re-Type Password</label>
                                    <input class="au-input au-input--full" type="password" name="password2" placeholder="Re-Type Password">
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="login-checkbox">
                                    <!-- <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label> -->
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                                    </div>
                                </div> -->
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have an account?
                                    <a href="<?= base_url('auth') ?>">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>