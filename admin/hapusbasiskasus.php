<?php
	session_start();
	include "koneksi.php";
	$kode = $_GET['kode'];
	$sqladm = "select * from admin where username='$_SESSION[namaadm]'";
	$hapus = mysqli_query ($kon, $sqladm);
	
	if(mysqli_fetch_array($hapus)){
		$sqldelete="delete from basis_kasus where kd_penyakit = '$kode'";
		$hapus = mysqli_query($kon, $sqldelete) or die (mysqli_error($kon));
		if($hapus){
			echo"<script>
		alert('data terhapus');
		window.location.href='index.php?p=basiskasus';
	</script>";
		}else{
			echo"<script>
		alert('data gagal dihapus');
		window.location.href='index.php?p=basiskasus';
	</script>";
			}
		}
	?>