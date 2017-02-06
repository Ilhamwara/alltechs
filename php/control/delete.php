<?php 

include '../../admin/php/control/koneksi.php';



if (isset($_GET['keranjang'])) {

	$id = $_GET['keranjang'];
	$keranjang = mysql_query("SELECT * FROM keranjang WHERE id = $id");
	$cek_keranjang = mysql_fetch_array($keranjang);
	if ($cek_keranjang) {
		$id_barang = $cek_keranjang['id_barang'];
		$qty = $cek_keranjang['qty'];
		$barang = mysql_query("SELECT * FROM barang WHERE id = $id_barang");		
		$cek_barang = mysql_fetch_array($barang);
		$total = $cek_barang['total'];				
		$barang_asli = ($qty + $total);		

		$update_barang = mysql_query("UPDATE barang SET total = '$barang_asli' WHERE id ='$id_barang'");
		$query_delete = mysql_query("DELETE FROM keranjang WHERE id='$id'");
		if ($query_delete && $update_barang) {
			header("Location:../../cart.php?message=success-delete");
		}
		else{
			header("Location:../../cart.php?message=error");
		}
	}
}
?>
