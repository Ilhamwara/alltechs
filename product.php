<?php 
session_start(); 
include 'admin/php/control/koneksi.php';
?>
<?php include 'php/include/head.php'; ?>
<style type="text/css">
   .new-product{
    background: #2C3E50; /* fallback for old browsers */
    padding: 80px 0px; 
    /*border: 1px solid #000;*/
}
.title{
    font-size: 30px;
    padding-bottom: 40px;
    font-weight: 700;
    /*color:  #fff ;*/
}  
.active{
    background: #f4d03f !important;
    color: #fff;
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
                                    <a href="product.php?page=all-product">All Product <i class="fa fa-chevron-right pull-right"></i></a>
                                </li>
                                <!-- End Testimonials -->
                                <!-- Accordion and Tabs -->
                                <li class="list-group-item">
                                    <a href="product.php?page=access-control">Access Control <i class="fa fa-chevron-right pull-right"></i></a>
                                </li>
                                <!-- End Accordion and Tabs -->
                                <!-- Buttons -->
                                <li class="list-group-item">
                                    <a href="product.php?page=auto-attendant">Auto Attendant <i class="fa fa-chevron-right pull-right"></i></a>
                                </li>
                                <!-- End Buttons -->
                                <!-- Carousels -->
                                <li class="list-group-item">
                                    <a href="product.php?page=facsimile">Facsimile <i class="fa fa-chevron-right pull-right"></i></a>
                                </li>
                                <!-- End Accordion and Tabs -->
                                <!-- Animate On Scroll -->
                                <li class="list-group-item">
                                    <a href="product.php?page=telephone">Telephone System <i class="fa fa-chevron-right pull-right"></i></a>
                                </li>
                                <!-- End Animate On Scroll -->
                                <!-- Grid System -->
                                <li class="list-group-item">
                                    <a href="product.php?page=cctv">CCTV <i class="fa fa-chevron-right pull-right"></i></a>
                                </li>
                                <!-- End Grid System -->
                            </ul> 
                        </div>
                    </div>
                    <!-- Main Text -->
                    <div class="col-md-9 animate fadeIn">
                        <!-- <h2 class="text-center title animate fadeIn">Product Terbaru</h2> -->
                        <!-- Person Details -->        

                        <?php 
                        $page = $_GET['page'];
                        

//////////////////////////////////////////////////// ALL /////////////////////////////////////////////////
                        if ($page == 'all-product') { 
                          $per_page = 9;
                          $page_query = mysql_query("SELECT COUNT(*) FROM barang");
                          $pages = ceil(mysql_result($page_query, 0) / $per_page);

                          $hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
                          $start = ($hal - 1) * $per_page;


                          $query = mysql_query("SELECT * FROM barang LIMIT $start, $per_page");    
                          while ($cek = mysql_fetch_array($query)) {
                            $harga = number_format($cek['harga']);                           
                            ?>

                            <div class="col-md-4 col-sm-3 person-details margin-bottom-30 animate fadeInRight">
                               <figure>
                                <img src="img/produk/<?php echo $cek['foto']; ?>" style="width: 100%; height: 180px;" alt="image1">
                                <figcaption style="overflow: hidden;">
                                    <h3 class="margin-bottom-10"><?php echo $cek['nama_barang']; ?></h3>
                                    <h4 class="margin-bottom-10" style="color: #f5b041 ;"><b>Rp. <?php echo $harga; ?></b></h4>
                                    <a href="detail.php?produk_key=<?php echo $cek['id']; ?>" class="btn pull-right" style="color: #fff; margin-top: 10px; background:#34495e;">
                                        View Details
                                    </a>
                                </figcaption>                                 
                            </figure>
                        </div> 
                        <?php 
                    } 
                    ?>
                    <!-- BEGIN PAGINATOR -->
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                          <ul class="pagination pull-right">
                            <?php
                            if($pages >= 1 && $hal <= $pages)
                            {
                              for($x=1; $x<=$pages; $x++)
                              {
                                if($x == $hal){
                                  echo '  <li class="active"><a href="?page=all-product&&hal='.$x.'" style="color:white !important; cursor:pointer;">'.$x.'</a></li> ';
                              }
                              else{
                                  echo ' <li><a href="?page=all-product&&hal='.$x.'">'.$x.'</a></li>';
                              }
                          }
                      }
                      ?>
                  </ul>
              </div>
          </div>
          <!-- END PAGINATOR -->
          <?php
      } 

      elseif ($page == 'access-control') { 
          $per_page = 9;
          $page_query = mysql_query("SELECT COUNT(*) FROM barang WHERE kategori = 'Access-Control'");
          $pages = ceil(mysql_result($page_query, 0) / $per_page);

          $hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
          $start = ($hal - 1) * $per_page;


          $query = mysql_query("SELECT * FROM barang WHERE kategori = 'Access-Control' LIMIT $start, $per_page");    
          while ($cek = mysql_fetch_array($query)) {
            $harga = number_format($cek['harga']);                           
            ?>

            <div class="col-md-4 col-sm-3 person-details margin-bottom-30 animate fadeInRight">
               <figure>
                <img src="img/produk/<?php echo $cek['foto']; ?>" style="width: 100%; height: 180px;" alt="image1">
                <figcaption style="overflow: hidden;">
                    <h3 class="margin-bottom-10"><?php echo $cek['nama_barang']; ?></h3>
                    <h4 class="margin-bottom-10" style="color: #f5b041 ;"><b>Rp. <?php echo $harga; ?></b></h4>
                    <a href="detail.php?produk_key=<?php echo $cek['id']; ?>" class="btn pull-right" style="color: #fff; margin-top: 10px; background:#34495e;">
                        View Details
                    </a>
                </figcaption>                                 
            </figure>
        </div> 
        <?php 
    }  
    ?>
    <!-- BEGIN PAGINATOR -->
    <div class="row">
        <div class="col-md-8 col-sm-8">
          <ul class="pagination pull-right">
            <?php
            if($pages >= 1 && $hal <= $pages)
            {
              for($x=1; $x<=$pages; $x++)
              {
                if($x == $hal){
                    echo '  <li class="active"><a href="?page=access-control&&hal='.$x.'" style="color:white !important; cursor:pointer;">'.$x.'</a></li> ';
                }
                else{
                  echo ' <li><a href="?page=access-control&&hal='.$x.'">'.$x.'</a></li>';
              }
          }
      }
      ?>
  </ul>
</div>
</div>
<!-- END PAGINATOR -->
<?php
} 
elseif ($page == 'auto-attendant') { 
  $per_page = 9;
  $page_query = mysql_query("SELECT COUNT(*) FROM barang WHERE kategori = 'auto-attendant'");
  $pages = ceil(mysql_result($page_query, 0) / $per_page);

  $hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
  $start = ($hal - 1) * $per_page;


  $query = mysql_query("SELECT * FROM barang WHERE kategori = 'auto-attendant' LIMIT $start, $per_page");    
  while ($cek = mysql_fetch_array($query)) {
    $harga = number_format($cek['harga']);                           
    ?>

    <div class="col-md-4 col-sm-3 person-details margin-bottom-30 animate fadeInRight">
       <figure>
        <img src="img/produk/<?php echo $cek['foto']; ?>" style="width: 100%; height: 180px;" alt="image1">
        <figcaption style="overflow: hidden;">
            <h3 class="margin-bottom-10"><?php echo $cek['nama_barang']; ?></h3>
            <h4 class="margin-bottom-10" style="color: #f5b041 ;"><b>Rp. <?php echo $harga; ?></b></h4>
            <a href="detail.php?produk_key=<?php echo $cek['id']; ?>" class="btn pull-right" style="color: #fff; margin-top: 10px; background:#34495e;">
                View Details
            </a>
        </figcaption>                                 
    </figure>
</div> 
<?php 
}  
?>
<!-- BEGIN PAGINATOR -->
<div class="row">
    <div class="col-md-8 col-sm-8">
      <ul class="pagination pull-right">
        <?php
        if($pages >= 1 && $hal <= $pages)
        {
          for($x=1; $x<=$pages; $x++)
          {
            if($x == $hal){
                echo '  <li class="active"><a href="?page=auto-attendant&&hal='.$x.'" style="color:white !important; cursor:pointer;">'.$x.'</a></li> ';
            }
            else{
              echo ' <li><a href="?page=auto-attendant&&hal='.$x.'">'.$x.'</a></li>';
          }
      }
  }
  ?>
</ul>
</div>
</div>
<!-- END PAGINATOR -->
<?php
} 

elseif ($page == 'facsimile') { 
  $per_page = 9;
  $page_query = mysql_query("SELECT COUNT(*) FROM barang WHERE kategori = 'facsimile'");
  $pages = ceil(mysql_result($page_query, 0) / $per_page);

  $hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
  $start = ($hal - 1) * $per_page;


  $query = mysql_query("SELECT * FROM barang WHERE kategori = 'facsimile' LIMIT $start, $per_page");    
  while ($cek = mysql_fetch_array($query)) {
    $harga = number_format($cek['harga']);                           
    ?>

    <div class="col-md-4 col-sm-3 person-details margin-bottom-30 animate fadeInRight">
       <figure>
        <img src="img/produk/<?php echo $cek['foto']; ?>" style="width: 100%; height: 180px;" alt="image1">
        <figcaption style="overflow: hidden;">
            <h3 class="margin-bottom-10"><?php echo $cek['nama_barang']; ?></h3>
            <h4 class="margin-bottom-10" style="color: #f5b041 ;"><b>Rp. <?php echo $harga; ?></b></h4>
            <a href="detail.php?produk_key=<?php echo $cek['id']; ?>" class="btn pull-right" style="color: #fff; margin-top: 10px; background:#34495e;">
                View Details
            </a>
        </figcaption>                                 
    </figure>
</div> 
<?php 
}  
?>
<!-- BEGIN PAGINATOR -->
<div class="row">
    <div class="col-md-8 col-sm-8">
      <ul class="pagination pull-right">
        <?php
        if($pages >= 1 && $hal <= $pages)
        {
          for($x=1; $x<=$pages; $x++)
          {
            if($x == $hal){
                echo '  <li class="active"><a href="?page=facsimile&&hal='.$x.'" style="color:white !important; cursor:pointer;">'.$x.'</a></li> ';
            }
            else{
              echo ' <li><a href="?page=facsimile&&hal='.$x.'">'.$x.'</a></li>';
          }
      }
  }
  ?>
</ul>
</div>
</div>
<!-- END PAGINATOR -->
<?php
} 
elseif ($page == 'telephone') { 
  $per_page = 9;
  $page_query = mysql_query("SELECT COUNT(*) FROM barang WHERE kategori = 'telephone'");
  $pages = ceil(mysql_result($page_query, 0) / $per_page);

  $hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
  $start = ($hal - 1) * $per_page;


  $query = mysql_query("SELECT * FROM barang WHERE kategori = 'telephone' LIMIT $start, $per_page");    
  while ($cek = mysql_fetch_array($query)) {
    $harga = number_format($cek['harga']);                           
    ?>

    <div class="col-md-4 col-sm-3 person-details margin-bottom-30 animate fadeInRight">
       <figure>
        <img src="img/produk/<?php echo $cek['foto']; ?>" style="width: 100%; height: 180px;" alt="image1">
        <figcaption style="overflow: hidden;">
            <h3 class="margin-bottom-10"><?php echo $cek['nama_barang']; ?></h3>
            <h4 class="margin-bottom-10" style="color: #f5b041 ;"><b>Rp. <?php echo $harga; ?></b></h4>
            <a href="detail.php?produk_key=<?php echo $cek['id']; ?>" class="btn pull-right" style="color: #fff; margin-top: 10px; background:#34495e;">
                View Details
            </a>
        </figcaption>                                 
    </figure>
</div> 
<?php 
}  
?>
<!-- BEGIN PAGINATOR -->
<div class="row">
    <div class="col-md-8 col-sm-8">
      <ul class="pagination pull-right">
        <?php
        if($pages >= 1 && $hal <= $pages)
        {
          for($x=1; $x<=$pages; $x++)
          {
            if($x == $hal){
                echo '  <li class="active"><a href="?page=telephone&&hal='.$x.'" style="color:white !important; cursor:pointer;">'.$x.'</a></li> ';
            }
            else{
              echo ' <li><a href="?page=telephone&&hal='.$x.'">'.$x.'</a></li>';
          }
      }
  }
  ?>
</ul>
</div>
</div>
<!-- END PAGINATOR -->
<?php
} 
elseif ($page == 'cctv') { 
  $per_page = 9;
  $page_query = mysql_query("SELECT COUNT(*) FROM barang WHERE kategori = 'cctv'");
  $pages = ceil(mysql_result($page_query, 0) / $per_page);

  $hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
  $start = ($hal - 1) * $per_page;


  $query = mysql_query("SELECT * FROM barang WHERE kategori = 'cctv' LIMIT $start, $per_page");    
  while ($cek = mysql_fetch_array($query)) {
    $harga = number_format($cek['harga']);                           
    ?>

    <div class="col-md-4 col-sm-3 person-details margin-bottom-30 animate fadeInRight">
       <figure>
        <img src="img/produk/<?php echo $cek['foto']; ?>" style="width: 100%; height: 180px;" alt="image1">
        <figcaption style="overflow: hidden;">
            <h3 class="margin-bottom-10"><?php echo $cek['nama_barang']; ?></h3>
            <h4 class="margin-bottom-10" style="color: #f5b041 ;"><b>Rp. <?php echo $harga; ?></b></h4>
            <a href="detail.php?produk_key=<?php echo $cek['id']; ?>" class="btn pull-right" style="color: #fff; margin-top: 10px; background:#34495e;">
                View Details
            </a>
        </figcaption>                                 
    </figure>
</div> 
<?php 
}  
?>
<!-- BEGIN PAGINATOR -->
<div class="row">
    <div class="col-md-8 col-sm-8">
      <ul class="pagination pull-right">
        <?php
        if($pages >= 1 && $hal <= $pages)
        {
          for($x=1; $x<=$pages; $x++)
          {
            if($x == $hal){
                echo '  <li class="active"><a href="?page=cctv&&hal='.$x.'" style="color:white !important; cursor:pointer;">'.$x.'</a></li> ';
            }
            else{
              echo ' <li><a href="?page=cctv&&hal='.$x.'">'.$x.'</a></li>';
          }
      }
  }
  ?>
</ul>
</div>
</div>
<!-- END PAGINATOR -->
<?php
} 
?>
<!-- End Main Text -->
</div>
</div>                           
</div>
</div>
</div>
<!-- === END CONTENT === -->
<?php include 'php/include/footer.php'; ?>