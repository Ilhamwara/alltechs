<?php 
include '../../admin/php/control/koneksi.php';
session_start();
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysql_query("SELECT * FROM member WHERE username='$username' AND password='$password'");
	$admin = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
	$cek_admin = mysql_fetch_array($admin);
	$cek = mysql_fetch_array($query);
}
if ($cek['username'] != '') {
	$_SESSION['id'] = $cek['id'];
	header("location:../../profile.php?page=history-order&&message=success");
}
else{
	if(($cek_admin['username'] != '')) {
		$_SESSION['id'] = $cek_admin['id'];
		header("location:../../admin/main.php?page=admin-control&&message=success");
	}
	else{
		header("location:../../login.php?message=error"); 
	}	
}
?>