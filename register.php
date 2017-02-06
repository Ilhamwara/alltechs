<?php include 'php/include/head.php'; ?>
<body>
    <div id="body_bg">
        <div class="primary-container-group">
            <!--End Background -->
            <div class="primary-container">
                <?php include 'php/include/topbar.php'; ?>
                <!-- === END HEADER === -->
                <!-- === BEGIN CONTENT === -->
                <div id="content" style="padding:70px 0px;box-shadow: 0px 0px 5px #adadad;">
                    <div class="container">
                        <div class="row margin-vert-30">
                            <!-- Register Box -->
                            <div class="col-md-6 col-md-offset-3 col-sm-offset-3 animate fadeInLeft">                            
                                <form class="signup-page" action="php/control/register.php" method="POST">
                                    <div class="signup-header margin-bottom-30 text-center">
                                        <h2>Bikin Akun Baru</h2>
                                    </div>
                                    <label>Nama Lengkap <span class="color-red">*</span></label>
                                    <input class="form-control margin-bottom-20" type="text" name="nama" required>
                                    <label>Username <span class="color-red">*</span></label>
                                    <input class="form-control margin-bottom-20" type="text" name="username" required>
                                    <label>Alamat <span class="color-red">*</span></label>
                                    <input class="form-control margin-bottom-20" type="text" name="alamat" required>
                                    <label>Phone <span class="color-red">*</span></label>
                                    <input class="form-control margin-bottom-20" type="text" name="phone" required>
                                    <label>Email Address<span class="color-red">*</span></label>
                                    <input class="form-control margin-bottom-20" type="email" name="email" required>
                                    <label>Password<span class="color-red">*</span>
                                    </label>
                                    <input class="form-control margin-bottom-20" type="password" name="password" required>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <p>
                                                Sudah Memiliki Akun ? 
                                                Silahkan login <a href="login.php"><b>Disini</b></a>
                                            </p>
                                        </div>
                                        <div class="col-lg-4 text-right">
                                            <button class="btn btn-primary1" style="color: #fff;" name="reg" type="submit">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Register Box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- === END CONTENT === -->
        <?php include 'php/include/footer.php'; ?>