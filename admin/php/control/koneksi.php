<?php 

	$username 	= 'u584764515_root';
	$server 	= 'mysql.idhostinger.com';
	$pass		= '12345678';
	$db			= 'u584764515_sarah';

	$conn = mysql_connect($server,$username,$pass);
	$conn_db = mysql_select_db($db);
 ?>