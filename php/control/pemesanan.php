<?php 
session_start();
include '../../admin/php/control/koneksi.php';
include('cek-login.php');

if (isset($_SESSION['id'])) {
	if (isset($_POST['pesan'])) {
		$id_barang = $_GET['produk_key'];	

		$cek_barang = mysql_query("SELECT total FROM barang WHERE id = $id_barang");		
		$cek_aja = mysql_fetch_array($cek_barang);

		$id_user = $_SESSION['id'];		
		$harga_barang = $_POST['harga'];		
		$qty = $_POST['qty'];					
		$total_barang = ($cek_aja['total'] - $qty);
		$harga = ($harga_barang * $qty);

		if ($qty >= $total_barang) {
			header("location:../../detail.php?produk_key=$id_barang&&message=stok-habis");	
		}
		else{
			$query2 = mysql_query("UPDATE barang SET total='$total_barang' WHERE id ='$id_barang'");
			$query = mysql_query("INSERT INTO keranjang VALUES(NULL,'$id_barang','$id_user','$qty','$harga',NOW())");

			if ($query && $query2) {			
				header("location:../../cart.php?message=success");
			}
			else{
				header("location:../../detail.php?produk_key=$id_barang&&message=error");	
			}
		}
	}
}
else{
	header('location:../../login.php?message=akun');
}
?>