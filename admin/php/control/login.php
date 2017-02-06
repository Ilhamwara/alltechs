<?php 
include 'koneksi.php';
session_start();
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
  $cek = mysql_fetch_array($query);
}
if ($cek['username'] != '') {
  $_SESSION['id'] = $cek['id'];
  header("location:../../main.php?page=admin-control&&message=success");
}
else{
 header("location:../../login.php?message=error"); 
}
?>