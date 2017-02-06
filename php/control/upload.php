<?php 
include '../../admin/php/control/koneksi.php';

if (isset($_POST['upload'])) {
	$id = $_POST['id'];
	$bank = $_POST['bank'];
	$atasnama = $_POST['atasnama'];
	$rekening = $_POST['rekening'];
	$folder = "../../img/";
	$simpan_gambar = $folder.basename($_FILES['bukti']['name']);
	if((!empty($_FILES['bukti']['name']))){
		$gambar		= $_FILES['bukti']['name'];
		$type_gambar	= $_FILES['bukti']['type'];
		if (($type_gambar == "image/jpeg" || $type_gambar == "image/jpg" || $type_gambar == "image/png" || $type_gambar == "")){
			$query = mysql_query("UPDATE pemesanan SET bukti='$gambar',bank='$bank',atasnama='$atasnama',rekening='$rekening' WHERE id='$id'");

			if ($query){
				move_uploaded_file($_FILES['bukti']['tmp_name'],$simpan_gambar);
				header("location:../../profile.php?page=history-order&&bukti=success-checkout");
			}
		}
		else{
			header("location:../../profile.php?page=history&&bukti=error");
		}
	}
}
?>