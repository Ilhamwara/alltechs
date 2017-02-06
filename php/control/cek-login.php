<?php 
if ($_SESSION['id'] == '') {
    //redirect ke halaman login
    header('location:../../login.php');
}
?>