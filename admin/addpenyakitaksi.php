<?php
	session_start();
	include "koneksi.php";
	$sqladm = "select * from admin where username='$_SESSION[namaadm]'";
	$paru = mysqli_query ($kon, $sqladm);
	$radm = mysqli_fetch_array($paru);
	
	$kd_penyakit = $_POST['kd_penyakit'];
	$nm_penyakit = $_POST['nm_penyakit'];
	$ket = $_POST['ket'];
	$solusi = $_POST['solusi'];
	
	
	$sql ="insert into penyakit (kd_penyakit, id_admin, nm_penyakit, ket, solusi) value ('$kd_penyakit','$radm[id_admin]', '$nm_penyakit','$ket','$solusi')";
	
	$penyakit = mysqli_query ($kon, $sql) or die(mysqli_error($kon));
	if($penyakit){
			echo "Disimpan";
		}else{
			echo "Gagal menyimpan";
		}
?>