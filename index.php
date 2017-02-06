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
.welcome{
    box-shadow: 0px 3px 20px #000;
    background: #73C8A9; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #73C8A9 , #373B44); /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #73C8A9 , #373B44); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: #fff; 
    padding: 70px 0px;
}       
.first-text{
    width:100%; 
    margin-bottom: 10%; 
    color: #fff; 
    font-size: 50px; 
    font-weight: 700;
    text-transform: uppercase;
}
.second-text{
    width:100%; 
    margin-bottom: 30%; 
    font-size: 30px; 
    line-height: 50px;
}                   
</style>
<body>
    <div id="body_bg" style="overflow: hidden;">
        <div class="primary-container-group">                
            <div class="primary-container">
              <?php  include ('php/include/topbar.php'); ?>
              <!-- === END HEADER === -->
              <!-- === BEGIN CONTENT === -->
              <div id="content">
                <div class="container">
                    <div class="row">
                        <!-- Carousel Slideshow -->
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                            </ol>
                            <div class="clearfix"></div>
                            <!-- End Carousel Indicators -->
                            <!-- Carousel Images -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/banner/ban1.jpg" style="height: 630px; width: 100%;">
                                    <div class="carousel-caption">
                                        <div class="first-text animate fadeInDown">
                                          
                                        </div>
                                        <div class="second-text animate fadeInUp">
                                            
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/banner/ban2.jpg" style="height: 630px; width: 100%;">
                                </div>
                                <div class="item">
                                    <img src="img/banner/ban3.jpg" style="height: 630px; width: 100%;">
                                    <div class="carousel-caption">
                                        <div class="first-text animate fadeInDown">
                                            
                                        </div>
                                        <div class="second-text animate fadeInUp">
                                            <p>
                                                
                                            </p>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            <!-- End Carousel Images -->
                            <!-- Carousel Controls -->
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- End Carousel Controls -->
                        </div>
                        <!-- End Carousel Slideshow -->
                    </div>
                </div>
                <div class="container" style="padding: 70px 20px;">
                    <div class="row margin-vert-30">
                        <!-- Main Text -->
                        <div class="col-md-12 animate fadeIn">
                            <h2 class="text-center title animate fadeIn">Product Terbaru</h2>
                            <!-- Person Details -->
                            <?php 
                            $query = mysql_query("SELECT * FROM barang ORDER BY tanggal DESC LIMIT 8");    
                            while ($cek = mysql_fetch_array($query)) {
                              $harga = number_format($cek['harga']);
                              ?>
                              <div class="col-md-3 col-sm-3 person-details margin-bottom-30">
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
                            <?php } ?>                           
                        </div>
                        <!-- End Main Text -->
                    </div>
                </div>   
                <section class="welcome">   
                    <div class="container">
                        <div class="row">
                            <h2 class="animate fadeIn text-center margin-top-50" style="color: #fff; font-size: 30px; font-weight: 700;">
                                Selamat Datang di Alltechs
                            </h2>
                            <p class="animate fadeIn text-center">
                                Kepuasan pelanggan dan kepercayaan adalah modal utama dari kami
                            </p>
                            <p class="text-center animate fadeInUp margin-bottom-50">
                                <a href="contact.php" class="btn btn-lg" style="background: #fff; color: #141E30;">Kontak Kami</a>
                            </p>
                        </div>
                    </div>  
                </section>                      
            </div>
        </div>
    </div>
    <!-- === END CONTENT === -->
    <?php include 'php/include/footer.php'; ?>