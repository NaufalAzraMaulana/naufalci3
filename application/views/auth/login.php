<body class="animsition">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="login-wrap">
                    <div class="card">
                        <div class="card-body">
                            <div class="login-content">
                                <a href="#" style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold; text-decoration: none; color: #333;">
                                    Sistem Akademik
                                </a>
                            </div>
                            <div class="login-form">
                                <?= $this->session->flashdata('message'); ?>
                                <form action="<?= base_url('auth') ?>" method="post">
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
                                    <!-- <div class="login-checkbox"> -->
                                    <!-- <label>
                                            <input type="checkbox" name="remember">Remember Me
                                        </label> -->
                                    <!-- <label> -->
                                    <a href="#">Forgotten Password?</a>
                                    </label>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Sign In</button>
                            <!-- <div class="social-login-content">
                                        <div class="social-button">
                                            <button class="au-btn au-btn--block au-btn--blue m-b-20">Sign in with Facebook</button>
                                            <button class="au-btn au-btn--block au-btn--blue2">Sign in with Twitter</button>
                                        </div>
                                    </div> -->
                            </form>
                            <div class="register-link">
                                <p>Don't have an account? <a href="<?= base_url('Auth/registrasi') ?>">Sign Up Here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>