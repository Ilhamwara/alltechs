<!--sidebar-menu-->
<div id="sidebar">
  <h2 class="text-center" style="padding-top: 30px;"><a href="../../index.php" style="color:#fff;">Admin</a></h2>
  <a href="" class="visible-phone"><i class="fa fa-home"></i> Dashboard</a>
  <ul>
    <li> <a href="../index.php"><i class="fa fa-laptop"></i> <span>View Website</span></a></li>
    <?php 
    $page = $_GET['page'];
if(($page == 'admin-control') || ($page == 'tambah-admin') || ($page == 'update-admin')) { ?>
<li class="active"> <a href="main.php?page=admin-control"><i class="fa fa-user"></i> <span>Admin</span></a></li>
<?php
}
else{ ?>
<li> <a href="main.php?page=admin-control"><i class="fa fa-user"></i> <span>Admin</span></a></li>
<?php
}
if (($page == 'member')) { ?>
<li class="active"> <a href="main.php?page=member"><i class="fa fa-group"></i> <span>Member</span></a></li>
<?php }
else{ ?>
<li> <a href="main.php?page=member"><i class="fa fa-group"></i> <span>Member</span></a></li>
<?php }
if (($page == 'pemesanan') || ($page == 'update-pemesanan') || ($page == 'form-pemesanan')) { ?>
<li class="active"> <a href="main.php?page=pemesanan"><i class="fa fa-truck"></i> <span>Pemesanan</span></a></li>
<?php }
else{ ?>
<li> <a href="main.php?page=pemesanan"><i class="fa fa-truck"></i> <span>Pemesanan</span></a></li>
<?php }
if ($page == 'transaksi') { ?>
<li class="active"> <a href="main.php?page=transaksi"><i class="fa fa-money"></i> <span>Transaksi</span></a></li>
<?php }
else{ ?>
<li> <a href="main.php?page=transaksi"><i class="fa fa-money"></i> <span>Transaksi</span></a></li>
<?php }
if ($page == 'stok-barang') { ?>
<li class="active"> <a href="main.php?page=stok-barang"><i class="fa fa-shopping-cart"></i> <span>Stock Barang</span></a></li>
<?php }
else{ ?>
<li> <a href="main.php?page=stok-barang"><i class="fa fa-shopping-cart"></i> <span>Stock Barang</span></a></li>
<?php }

if ($page == 'laporan') { ?>
<li class="active"> <a href="main.php?page=laporan"><i class="fa fa-pencil"></i> <span>Laporan</span></a></li>
<?php }
else{ ?>
<li> <a href="main.php?page=laporan"><i class="fa fa-pencil"></i> <span>Laporan</span></a></li>
<?php }

if ($page == 'oltp') { ?>
<li class="active"> <a href="main.php?page=oltp"><i class="fa fa-area-chart"></i> <span>Grafik</span></a></li>
<?php }
else{ ?>
<li> <a href="main.php?page=oltp"><i class="fa fa-area-chart"></i> <span>Grafik</span></a></li>
<?php }
?>
<li> <a href="php/control/logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>        
</ul>
</div>
  <!--sidebar-menu-->