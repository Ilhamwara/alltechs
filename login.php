<?php include 'php/include/head.php'; ?>
<body>
    <div id="body_bg">
        <div class="primary-container-group">            
            <div class="primary-container">
               <?php include 'php/include/topbar.php'; ?>
               <!-- === END HEADER === -->
               <!-- === BEGIN CONTENT === -->
               <div id="content" style="padding:70px 0px;box-shadow: 0px 0px 5px #adadad;">
                <div class="container">
                    <div class="container">
                        <div class="row margin-vert-30">
                            <!-- Login Box -->
                            <div class="col-md-6 col-md-offset-3 col-sm-offset-3 animate fadeInLeft">

                               <?php 
                               error_reporting(0);
                               if ($_GET['message'] == 'success') { ?>
                               <div class="alert alert-success">
                                  <strong>Akun anda berhasil di buat! Silahkan login</strong>
                              </div>
                              <?php 
                          }
                          elseif ($_GET['message'] == 'error') { ?>
                          <div class="alert alert-danger">
                            <strong>Kesalahan pada username atau password anda! Silahkan coba lagi</strong>
                        </div>
                        <?php
                    }
                    elseif ($_GET['message'] == 'akun') { ?>
                    <div class="alert alert-warning">
                      <strong>Anda harus login terlebih dahulu unutuk melakukan pemesanan</strong>
                  </div>
                  <?php
              }
              ?>    
               <form action="php/control/login.php" method="POST" class="login-page">
                <div class="login-header margin-bottom-30 text-center">
                    <h2>Login to your account</h2>
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <input placeholder="Username" class="form-control" type="text" name="username">
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon">
                        <i class="fa fa-lock"></i>
                    </span>
                    <input placeholder="Password" class="form-control" type="password" name="password">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Belum memiliki akun ? <a href="register.php"><b>Register disini</b></a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary1 pull-right" name="login" style="color: #fff;" type="submit">Login</button>
                    </div>
                </div>                                                                                
            </form>
        </div>
        <!-- End Login Box -->
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- === END CONTENT === -->
<?php include 'php/include/footer.php'; ?>