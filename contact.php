<?php
session_start();
 include 'php/include/head.php'; 
 ?>
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
                                <h2 class="margin-bottom-40 text-center"><b>Contact Us</b></h2>
                                <div class="row margin-bottom-30">
                                    <div class="col-md-12 animate fadeInLeft">
                                        <iframe style="height:500px;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=UNAS,+Pasar+Minggu,+Kota+Jakarta+Selatan,+Daerah+Khusus+Ibukota+Jakarta,+Indonesia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
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