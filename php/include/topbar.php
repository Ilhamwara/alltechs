<?php 
include 'admin/php/control/koneksi.php';
error_reporting(0);
$id = $_SESSION['id'];
?>
<!-- Top Menu -->
<div id="hornav" class="container no-padding">
  <div class="row">
    <div class="col-md-12">
      <div class="">
        <ul id="hornavmenu" class="nav navbar-nav">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <span>Product</span>
            <ul>
              <li>
                <a href="product.php?page=all-product">All Product</a>
              </li>
              <li>
                <a href="product.php?page=access-control">Access Control</a>
              </li>
              <li>
                <a href="product.php?page=auto-attendant">Auto Attendant</a>
              </li>
              <li>
                <a href="product.php?page=facsimile">Facsimile</a>
              </li>
              <li>
                <a href="product.php?page=telephone">Telephone System</a>
              </li>
              <li>
                <a href="product.php?page=cctv">CCTV</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="about.php">About Us</a>
          </li>    
          <li>
          <a href="contact.php">Contact Us</a>
          </li>            
        </ul>
        <ul id="hornavmenu" class="nav navbar-nav pull-right">
          <?php 
          if ($_SESSION['id']) { 
            $query = mysql_query("SELECT * FROM keranjang WHERE id_user = '$id'");
            $cek = mysql_num_rows($query);
            ?>
            <li><a href="profile.php?page=history-order">My Account</a></li>
            <li><a href="cart.php" class="fa fa-shopping-cart">My Cart <span class="badge" style="background:red;"><?php echo $cek; ?></span></a></li>
            <?php } else{ ?>
            <li><a href="login.php">Log In</a></li>
            <li><a href="register.php">Register</a></li>          
            <?php } ?>                    
          </ul>
        </div>
      </div>
    </div>
  </div>
                <!-- End Top Menu -->