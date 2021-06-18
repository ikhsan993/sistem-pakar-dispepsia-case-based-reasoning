<?php
	session_start();
	include "koneksi.php";
	$sqladm = "select * from admin where username='$_SESSION[namaadm]'";
	$hapus = mysqli_query ($kon, $sqladm);
	
	if(mysqli_fetch_array($hapus)){
		$sqldelete="delete from keterangan where id_keterangan = '$_GET[hapus]'";
		$hapus = mysqli_query($kon, $sqldelete) or die (mysqli_error($kon));
		if($hapus){
			echo"<script>
		
		window.location.href='index.php?p=hasilkonsultasi';
	</script>";
		}else{
			echo"<script>
		
		window.location.href='index.php?p=hasilkonsultasi';
	</script>";
			}
		}
	?>
