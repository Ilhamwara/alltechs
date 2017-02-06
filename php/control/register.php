<?php 

include '../../admin/php/control/koneksi.php';


if (isset($_POST['reg'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysql_query("INSERT INTO member VALUES(NULL,'$nama','$username','$alamat','$phone','$email','$password','')");

	if ($query) {
		header("location:../../login.php?message=success");
	}
	else{
		header("location:../../register.php?message=error");	
	}
}
?>