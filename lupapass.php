<link rel="stylesheet" type="text/css" href="gaya.css" />
<div id="login">
<fieldset>
	<p class="teal" align="justify"><b>Untuk menemukan password, silahkan isikan data diri anda pada form berikut : </b></p>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <input name="username" type="text" id="username" placeholder="Username">
  <input name="nama" type=text id="nama" placeholder="Nama Lengkap">
  <input name="nohp" type=number id="nohp" placeholder="Nomor HP">
  <input type="submit" name="Submit" value="Cek Password">
</form>
<br>
<marquee direction ="left"> <b class="teal">Butuh bantuan menemukan password? hubungi admin melalui 0890991119911 </b></marquee>
</fieldset>
</div>
<?php
include "koneksi.php";
	$un =$_POST['username'];
	$nm =$_POST['nama'];
	$nhp =$_POST['nohp'];
	$sqlpas = mysqli_query ($kon, "select * from pasien where username='$un' and nm_lengkap='$nm' and no_hp='$nhp'");
	$masuk =mysqli_fetch_array($sqlpas);
	$word = $masuk['password'];
	if (!empty($masuk)){
		echo "<script language=javascript>
				alert('Hai $nama password anda adalah $word');
				window.location=('?p=login')
				</script>";
	}
	else{
	echo "<script language=javascript>
				alert('Hai $nm mohon maaf password anda tidak ditemukan, pastikan semua data diisi dengan benar');
				</script>";
	}

?>