<?php 
include '../../admin/php/control/koneksi.php';

// $page = $_GET['page'];
if (isset($_POST['update'])) {
	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = mysql_query("UPDATE member SET nama='$nama',alamat='$alamat',phone='$phone',email='$email',username='$username',password='$password' WHERE id='$id'");

	if ($query) {
		header("location:../../profile.php?page=setting-profile&&pesan=success");
	}
	else{
		header("location:../../profile.php?page=setting-profile&&pesan=error");	
	}
}
else{
	header("location:../../profile.php?page=setting-profile&&pesan=error");
}
?>