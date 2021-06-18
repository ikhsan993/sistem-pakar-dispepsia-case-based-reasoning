<?php
	session_start();
	include "koneksi.php";
	
	$sqladm = "select * from admin where username='$_SESSION[namaadm]'";
	$edit = mysqli_query($kon, $sqladm);
	$radm = mysqli_fetch_array($edit);
	$nm_penyakit = $_POST['nm_penyakit'];	
	
	$sql ="update penyakit set id_admin='$radm[id_admin]', nm_penyakit='$nm_penyakit' where kd_penyakit='$_POST[kd_penyakit]'";	
	
	$edit1 = mysqli_query ($kon, $sql) or die(mysqli_error($kon));
	if($edit1){
			echo"<script>
		
		window.location.href='index.php?p=penyakit';
	</script>";
		}else{
			echo"<script>
		
		window.location.href='index.php?p=penyakit';
	</script>";
			}
		
?>