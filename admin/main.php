<?php
include 'php/part/head-part.php'; 
session_start();
?>

<body>
  <?php include 'php/part/sidebar-part.php'; ?>  
  <div id="content">
    <?php 
    $page = $_GET['page'];
    if ($page == 'dashboard') {
      include 'php/body/dashboard.php';
    }
    elseif (($page == 'admin-control') || ($page == 'tambah-admin') || ($page == 'update-admin')) {
      include 'php/body/admin.php';
    }
    elseif (($page == 'pemesanan') || ($page == 'form-pemesanan')) {
      include 'php/body/pemesanan.php';
    }   
    elseif ($page == 'laporan') {
      include 'php/body/laporan.php';
    }   
    elseif ($page == 'transaksi') {
      include 'php/body/transaksi.php';
    }   
    elseif ($page == 'member') {
      include 'php/body/member.php';
    }   
    elseif (($page == 'stok-barang') || ($page == 'update-barang') || ($page == 'tambah-barang')) {
      include 'php/body/stok.php';
    }   
    elseif ($page == 'oltp') {
      include 'php/body/oltp.php';
    }      
    ?>
  </div><!-- /.content-wrapper -->
  <?php include("php/part/footer-part.php"); ?>
