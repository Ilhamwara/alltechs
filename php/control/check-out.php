<?php 
session_start();
include '../../admin/php/control/koneksi.php';
include('cek-login.php');

if (isset($_SESSION['id'])) {
	if (isset($_POST['check-out'])) {			
		$id_user = $_SESSION['id'];		
		$id_barang = $_POST['id_barang'];
		$harga = $_POST['harga'];					
		$qty = $_POST['qty'];							

		$query = mysql_query("INSERT INTO pemesanan VALUES(NULL,'$id_user','$id_barang','$qty','0','','','','','$harga',NOW())");

		if ($query) {
			mysql_query("DELETE FROM keranjang WHERE id_user='$id_user'");
			// mysql_query("UPDATE barang SET tersedia='$' ");
			header("location:../../profile.php?page=history-order&&message=success-cart");
		}
		else{
			header("location:../../cart.php?message=error-checkout");	
		}
	}
}
else{
	header('location:../../login.php?message=akun');
}
?>