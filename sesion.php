<?php 
session_start();
 if(isset($_COOKIE['ID_my_site'])) 
 { 	
 $username = $_COOKIE['ID_my_site']; 
  $sid=md5($username);
  $pemilik=$username;
  $left='10%';
			$query = "select * from mst_person where login='$pemilik' ";
			$result = mysql_query($query);
			trim($person= mysql_fetch_array($result));			
 }else{ 
	header("Location: login.php");
 }
 $title='Aplikasi Kasir';
 //echo time();
?>