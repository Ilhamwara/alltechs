<?php 
session_start();
include 'admin/php/control/koneksi.php';
include('php/control/cek-login.php');
  $id = $_SESSION['id'];
  $query = mysql_query("SELECT * FROM member WHERE id = $id");
  $user = mysql_fetch_array($query);
  $page = $_GET['page'];
  ?>

  <?php include 'php/include/head.php'; ?>
  <style type="text/css">
   .new-product{
    background: #2C3E50; /* fallback for old browsers */
    padding: 80px 0px; 
    /*border: 1px solid #000;*/
  }
  .panel-default {
    background-color: #fff;
  }
  .title{
    font-size: 22px;
    padding-bottom: 40px;
    /*color:  #fff ;*/
  }  
  .welcome{
    box-shadow: 0px 3px 20px #000;
    background: #141E30; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #141E30 , #243B55); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #141E30 , #243B55); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ 
    color: #fff; 
    padding: 70px 0px;
  }       
</style>
<body>
  <div id="body_bg" style="overflow: hidden;">
    <div class="primary-container-group">                
      <div class="primary-container">
        <?php include 'php/include/topbar.php'; ?>
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->
        <div id="content">                
          <div class="container" style="padding: 70px 20px; box-shadow: 0px 3px 10px #ddd;">
            <div class="row margin-vert-30">
              <div class="col-md-3">
                <div class="col-md-12 col-sm-12 person-details margin-bottom-30 animate fadeInLeft">
                 <ul class="list-group sidebar-nav" id="sidebar-nav">
                  <!-- Testimonials -->
                  <li class="list-group-item">
                    <a href="profile.php?page=history-order">History Order <i class="fa fa-money pull-right"></i></a>
                  </li>
                  <!-- End Testimonials -->
                  <!-- Accordion and Tabs -->
                  <li class="list-group-item">
                    <a href="profile.php?page=setting-profile">Setting Account <i class="fa fa-cog pull-right"></i></a>
                  </li>
                  <!-- End Accordion and Tabs -->
                  <!-- Buttons -->
                  <li class="list-group-item">
                    <a href="php/control/logout.php">Logout <i class="fa fa-sign-out pull-right"></i></a>
                  </li>
                  <!-- End Buttons -->
                </ul> 
              </div>
            </div>
            <!-- Main Text -->
            <div class="col-md-9 animate fadeIn">
              <!-- Person Details -->    
              <?php 
              error_reporting(0);
              if ($_GET['message'] == 'success') { ?>
              <div class="alert alert-success" id="alert">
                <strong>Selamat datang <?php echo $user['nama']; ?> </strong>
              </div>
              <?php 
            }                   
            elseif ($_GET['message'] == 'success-cart') { ?>
            <div class="alert alert-success" id="alert">
              <strong>Berhasil melakukan checkout</strong>
            </div>
            <?php
          }
          elseif ($_GET['bukti'] == 'success-checkout') { ?>
          <div class="alert alert-success" id="alert">
            <strong>Berhasil Upload Bukti Pembayaran</strong>
          </div>
          <?php
        }
        if($page == 'history-order'){ ?>                                                                                                                   
        <div class="panel panel-default">
          <div class="panel-body">
            <span class="text-center title animate fadeIn"><b>Product Terbaru</b></span>
            <br><br>
            <table class="table table-hover">
              <tr>
                <td><b>No</b></td>
                <td><b>Gambar</b></td>
                <td><b>Nama Barang</b></td>
                <td><b>Harga</b></td>
                <td><b>Quantity</b></td>
                <td><b>Status</b></td>
                <td><b>Tanggal</b></td>
                <td><b>Action</b></td>
              </tr>
              <?php 
              $query = mysql_query("SELECT pemesanan.id,barang.foto,barang.nama_barang,pemesanan.status,pemesanan.tanggal,pemesanan.bukti,pemesanan.harga AS total,pemesanan.qty AS quantity FROM pemesanan INNER JOIN barang ON pemesanan.id_barang=barang.id WHERE pemesanan.id_user='$id' ORDER BY pemesanan.status ASC");
              $cek = mysql_num_rows($query);
              if ($cek > 0) { 
                $no = 0;
                while ($array = mysql_fetch_array($query)) {
                  $no = $no+1;
                  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><img src="img/produk/<?php echo $array['foto']; ?>" class="img-responsive" style="height:100px; border-radius: 5px;"></td>
                    <td><?php echo $array['nama_barang']; ?></td>
                    <td><?php echo $array['total']; ?></td>
                    <td><?php echo $array['quantity']; ?></td>
                    <td><?php if($array['status'] == '0'){ ?>
                      <span class="btn btn-warning"><b>Pending</b></span>
                      <?php
                    } else{ ?>
                    <span class="btn" style="background: #1ABC9C; color: white;"><b>Confirm</b></span>
                    <?php
                  } ?></td>
                  <td><?php echo $array['tanggal']; ?></td>
                  <td>
                    <?php if (empty($array['bukti'])) { ?>
                    <a href="profile.php?page=upload-pembayaran&&kode=<?php echo $array['id']; ?>" class="btn btn-danger" style="color: white;" >Check-Out</a>
                    <?php
                  } 
                  elseif(!empty($array['bukti'])){ ?>
                  <span class="btn" style="background: #3498DB; color: white;" ><i class="fa fa-check"></i> Done</span>
                  <?php
                }
                ?>        
              </td>
            </tr>
            <?php
          }
        }
        else{ ?>
        <tr>
          <td colspan="8" style="background: #E74C3C; color: white; text-align: center;">DATA KOSONG</td>
        </tr>
        <?php
      }
      ?>

    </table>
  </div>
</div>
<?php }  
elseif($page == 'setting-profile'){ ?>                                                                                                                   
<div class="panel panel-default">
  <div class="panel-body">
    <span class="text-center title animate fadeIn"><b>Setting Profile</b></span>
    <br><br>

    <?php 
    error_reporting(0);
    if ($_GET['pesan'] == 'success') { ?>
    <div class="alert alert-success" id="alert">
      <strong>Profile anda berhasil di update</strong>
    </div>
    <?php 
  }
  elseif ($_GET['pesan'] == 'error') { ?>
  <div class="alert alert-danger" id="alert">
    <strong>Gagal untuk mengupdate profile anda</strong>
  </div>
  <?php
}
?>
<form action="php/control/update.php?id=<?php echo $user['id']; ?>" class="form-horizontal form-without-legend" method="POST" enctype="multipart/form-data">    
  <div class="form-group">
    <label class="col-lg-2 control-label" for="first-name">Nama Lengkap</label>
    <div class="col-lg-8">
      <input type="text" name="nama" class="form-control" value="<?php echo $user['nama']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-lg-2 control-label" for="last-name">Username</label>
    <div class="col-lg-8">
      <input type="text" name="username" class="form-control" value="<?php echo $user['username']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-lg-2 control-label" for="email">Alamat</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" name="alamat" value="<?php echo $user['alamat']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-lg-2 control-label" for="email">E-Mail</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" name="email" value="<?php echo $user['email']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-lg-2 control-label" for="telephone">Telephone</label>
    <div class="col-lg-8">
      <input type="text" name="phone" class="form-control" value="<?php echo $user['phone']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-lg-2 control-label" for="fax">Password</label>
    <div class="col-lg-8">
      <input type="password" name="password" class="form-control" value="<?php echo $user['password']; ?>">
    </div>
  </div>                 
  <div class="row">
    <div class="col-lg-8 col-md-offset-2 padding-left-0 padding-top-20">
      <button class="btn btn-primary1" style="color:#fff;" type="submit" name="update">Continue</button>
    </div>
  </div>
</form>
</div>
</div>
<?php 
}
elseif ($page == 'upload-pembayaran') { ?>
<?php $id = $_GET['kode'];  ?>

<h4><b>Upload Bukti Pemabayaran</b></h4>
<br>
<div>
	<b>Keterangan :</b> Anda bisa mengirim ke Rek kami <b>BCA : 1251612340 (a/n sarah Dm)</b> atau <b>Mandiri : 78677869766 (a/n Sarah Dwita Maharani)</b><br><br>
</div>
<div class="content-page" style="margin-bottom: 45px;">
  <form action="php/control/upload.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="form-group">
      <label class="col-sm-3 control-label" for="first-name">Upload Bukti Pembayaran</label>
      <div class="col-lg-5">
        <input type="file" name="bukti" class="form-control" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="first-name">Nama Bank</label>
      <div class="col-lg-5">
        <input type="text" name="bank" class="form-control" placeholder="ex: BCA" required>
      </div>
    </div>
    <div class="form-group">
    <label class="col-sm-3 control-label" for="first-name">Nama Pemilik Bank</label>
      <div class="col-lg-5">
        <input type="text" name="atasnama" class="form-control" placeholder="ex: Sarah DM" required>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="first-name">No Rekening</label>
      <div class="col-lg-5">
        <input type="text" name="rekening" class="form-control" placeholder="ex: 87892XXX" required>
      </div>
    </div>
	<div class="form-group">
      <label class="col-sm-3 control-label" for="first-name">Rekening Kami</label>
      <div class="col-lg-5">
        <select class="form-control">
			<option>-- Pilih Rekening Kami --</option>
			<option>Mandiri ( 78677869766 )</option>
			<option>BCA ( 1251612340 )</option>
		</select>
      </div>
    </div>
    <br>
    <div class="form-group text-center">
      <div class="col-md-12">
        <a href="profile.php?page=history-transaksi" class="btn btn-default">Back</a>
        <input type="submit" class="btn btn-success" name="upload" value="Upload">
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
<?php
} 
?> 
</div>
<!-- End Main Text -->
</div>
</div>                           
</div>
</div>
</div>
<!-- === END CONTENT === -->
<?php include 'php/include/footer.php'; ?>