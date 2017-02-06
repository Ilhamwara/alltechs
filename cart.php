<?php 
session_start();
include('php/control/cek-login.php');
$id = $_SESSION['id'];
?>
<?php include 'php/include/head.php'; ?>
<style type="text/css">
    .visi{
       background: #F4D03F; 
       padding: 80px 20px;
       color: white;
       box-shadow: 0px 3px 7px #bdbdbd
   }
   .misi{
    background: #5DADE2; 
    padding: 80px 20px;
    color: #fff;
    box-shadow: 0px 3px 7px #bdbdbd
}
</style>
<body>
    <div id="body_bg">

        <div class="primary-container-group">

            <div class="primary-container">
              <?php include 'php/include/topbar.php'; ?>
              <!-- === END HEADER === -->
              <!-- === BEGIN CONTENT === -->
              <div id="content">
                <div class="container">
                    <div class="row">
                        <section style="padding:70px 0px;box-shadow: 0px 0px 5px #adadad; overflow: hidden;">
                            <div class="col-md-12">
                                <h3 class="margin-bottom-40"><b>Keranjang Belanja</b></h3>
                                <?php 
                                error_reporting(0);
                                if ($_GET['message'] == 'success') { ?>
                                <div class="alert alert-success" id="alert">
                                  <strong>Barang berhasil ditambahkan</strong>
                              </div>
                              <?php 
                          } 
                          elseif ($_GET['message'] == 'success-delete') { ?>
                          <div class="alert alert-success" id="alert">
                            <strong>Barang berhasil dihapus</strong>
                        </div>
                        <?php 
                    }
                    elseif ($_GET['message'] == 'error') {  ?>
                    <div class="alert alert-danger" id="alert">
                      <strong>Barang gagal dihapus</strong>
                  </div>
                  <?php 
              }
              elseif ($_GET['message'] == 'error-checkout') { ?>
              <div class="alert alert-danger" id="alert">
                <strong>Barang gagal masuk check-out</strong>
            </div>
            <?php
        }
        ?> 
        <div class="row margin-bottom-30">
            <div class="col-md-12 animate fadeInLeft">
                <div class="table-responsive">
                 <table class="table table-hover">
                     <tr>
                         <td><b>No</b></td>
                         <td><b>Image</b></td>
                         <td><b>Quantity</b></td>
                         <td><b>Harga</b></td>
                         <td><b>Action</b></td>
                     </tr>
                     <?php 
                     $query = mysql_query("SELECT keranjang.id,barang.id AS id_barang,member.id AS id_user,barang.foto,barang.nama_barang,barang.deskripsi,keranjang.harga,keranjang.qty,keranjang.tanggal FROM keranjang INNER JOIN barang ON keranjang.id_barang=barang.id INNER JOIN member ON keranjang.id_user=member.id WHERE member.id=$id");
                     $no = 0;
                     while ($cek = mysql_fetch_array($query)) {
                      $no = $no+1;
                      $harga = number_format($cek['harga']); 
                      ?>
                      <tr>
                         <td><?php echo $no; ?></td>
                         <td><img src="img/produk/<?php echo $cek['foto']; ?>" style="width: 120px; height:120px; border-radius: 5px;"></td>
                         <td><?php echo $cek['qty']; ?></td>
                         <td>Rp <?php echo $harga; ?>,00</td>
                         <td><a href="php/control/delete.php?keranjang=<?php echo $cek['id']; ?>" class="btn btn-danger">Delete</a></td>
                     </tr>
                     <?php } ?>
                 </table>
                 <style type="text/css">
                     .total > ul{
                        clear: both;
                        list-style: none;
                    }
                    .total > ul > li > h3{
                        color: #F5B041;
                    }
                    .total > ul > li{
                        margin: 10px 20px;
                        display: inline-block;
                    }
                </style>
                <div class="col-md-12">
                 <div class="total pull-right">
                     <?php 
                     $query = mysql_query("SELECT SUM(harga) AS total , SUM(qty) AS Quantity ,id_barang FROM keranjang WHERE id_user = $id");
                     $cek5 = mysql_fetch_array($query);                                
                     $total = number_format($cek5['total']);
                     ?>          
                     <ul>
                         <li><h4><b>Total : </b></h4></li>
                         <li><h3><b>Rp <?php echo $total; ?>,00</b></h3></li>
                     </ul>
                 </div>
             </div>
             <a href="product.php?page=all-product" class="btn btn-primary1 pull-left" style="color: #fff;"><i class="fa-arrow-left"></i>Lanjutkan Belanja</a>
             <form action="php/control/check-out.php" method="POST">                    
              <input type="hidden" value="<?php echo $cek5['id_barang']; ?>" name="id_barang">
              <input type="hidden" value="<?php echo $cek5['Quantity']; ?>" name="qty">
              <input type="hidden" value="<?php echo $cek5['total']; ?>" name="harga">                      
              <button class="btn btn-success1 pull-right" style="color: #fff;" name="check-out" type="submit">Checkout <i class="fa-arrow-right"></i></button>
          </form> 
          <!-- <a href="" class="btn btn-success1 pull-right" style="color: #fff;">Checkout <i class="fa-arrow-right"></i></a> -->
      </div>
  </div>
</div>                                                                                       
</div>                            
</section>                        
</div>
</div>
</div>
</div>
</div>
<!-- === END CONTENT === -->
<?php include 'php/include/footer.php'; ?>