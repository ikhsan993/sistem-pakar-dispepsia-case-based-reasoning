<?php
 	session_start();
	include "koneksi.php";
	
	$sqladm = "select * from admin where username='$_POST[username]' and password='$_POST[password]'";
	$paru = mysqli_query($kon, $sqladm) or die (mysqli_error($kon));
	$row = mysqli_num_rows($paru);
	$radm = mysqli_fetch_array($paru);
	if($row > 0){		
		$_SESSION["namaadm"]=$radm["username"];
		$_SESSION["passadm"]=$radm["password"];
		header ("location:index.php");
			}else{
		header ("location:index.php");
	}
?> 