<?php 
session_start(); 
include 'admin/php/control/koneksi.php';
$id = $_GET['produk_key'];
$query = mysql_query("SELECT * FROM barang WHERE id='$id'");
$cek = mysql_fetch_array($query);
$harga = number_format($cek['harga']);
$nama = $cek['nama_barang'];
$harga2 = $cek['harga'];
$foto = $cek['foto'];
$total = $cek['total'];
$deskripsi = $cek['deskripsi'];

include 'php/include/head.php'; ?>
<body>
    <div id="body_bg">    
        <div class="primary-container-group">
            <div class="primary-container">
                <?php include 'php/include/topbar.php'; ?>
                <!-- === END HEADER === -->
                <!-- === BEGIN CONTENT === -->
                <div id="content">
                    <div class="container"style="padding: 70px 20px; box-shadow: 0px 3px 10px #ddd;">
                        <?php if ($_GET['message'] == 'stok-habis') { ?>
                        <div class="alert alert-danger" id="alert">
                            <strong>Maaf jumlah barang yang anda beli melebih stock kami</strong>
                        </div>
                        <?php } ?>
                        <div class="row margin-vert-30">
                            <div class="col-md-12">
                                <h2 class="animate fadeInDown"><?php echo $nama; ?></h2>                                
                                <div class="row">
                                    <div class="col-md-6 animate fadeIn">
                                        <img src="img/produk/<?php echo $foto; ?>" alt="about-me" class="margin-top-10">                                       
                                    </div>
                                    <div class="col-md-6 margin-bottom-10 animate fadeInRight">
                                        <h3 class="padding-top-10 pull-left"><b><?php echo $nama; ?></b></h3>
                                        <div class="clearfix"></div>
                                        <h4><b>Rp <?php echo $harga; ?>,00</b></h4>
                                    </div>
                                    <div class="col-md-6 animate fadeInRight">
                                        <p>
                                            <?php echo $deskripsi; ?>
                                        </p>
                                    </div>                                    
                                    <div class="col-xs-3 animate fadeInRight">
                                        <h4>Quantity :</h4>
                                        <form action="php/control/pemesanan.php?produk_key=<?php echo $_GET['produk_key']; ?>" method="POST">
                                            <input class="form-control" type="number" name="qty" placeholder="Jumlah Barang">
                                            <input type="hidden" name="harga" class="form-control input-sm" value="<?php echo $harga2; ?>">
                                            <br>
                                            <?php                                           
                                            if ($total <= 0 ) { ?>
                                            <div class="alert alert-danger" id="alert">
                                                <strong>Maaf Stock Barang Ini Sudah Habis</strong>
                                            </div>
                                         <?php
                                     }
                                     else{ ?>
                                     <button class="btn btn-warning margin-top-10" name="pesan">Masukan Keranjang</button>
                                     <?php } ?>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- === END CONTENT === -->
 <?php include 'php/include/footer.php'; ?>