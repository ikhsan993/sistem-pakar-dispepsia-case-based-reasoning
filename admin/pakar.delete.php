<?php
	session_start();
	include_once('admin.session.php');
	$kode	= $_GET['kode'];
	$sql	= mysql_query("delete from penyakit_gejala where kode_penyakit='$kode'");
	
	echo "<script language=javascript>
			window.alert('Hapus Berhasil');
			window.location='?module=pakar';
			</script>";
?>