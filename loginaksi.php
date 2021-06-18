<?php
 	session_start();
	include "koneksi.php";
	
	$sqlpas = "select * from pasien where username='$_POST[username]' and password='$_POST[password]'";
	$masuk = mysqli_query($kon, $sqlpas) or die (mysqli_error($kon));
	$row = mysqli_num_rows($masuk);
	$rpas = mysqli_fetch_array($masuk);
	if($row > 0){
		$_SESSION["id_user"]=$rpas["id_user"];		
		$_SESSION["namapas"]=$rpas["username"];
		$_SESSION["passpas"]=$rpas["password"];
		$_SESSION["namalengkap"]=$rpas["nm_lengkap"];
		header ("location:index.php");
			}else{
		header ("location:index.php?p=login");
	}
?> 