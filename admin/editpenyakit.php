<?php
include"koneksi.php";
if(isset($_POST['simpan'])){
	$simpan=mysqli_query($kon,"update penyakit set nm_penyakit='$_POST[nm_penyakit]',ket='$_POST[ket]', solusi='$_POST[solusi]' where kd_penyakit='$_POST[kd_penyakit]'");
	 
	if($simpan){
	echo"<script>
		
		window.location.href='index.php?p=penyakit';
	</script>";
	}else{
	echo"<script>
		
		</script>";
	}
}

$qcari=mysqli_query($kon,"select * from penyakit where kd_penyakit='$_GET[edit]'");
$cari=mysqli_fetch_array($qcari);
?>
<h2>Edit Data Penyakit</h2>
<form action='' method="post">
<table>

	<tr><td>Kode Penyakit</td><td><input name="kd_penyakit" type="text" value="<?php echo"$cari[kd_penyakit]"; ?>" readonly /></td></tr>
    <tr><td>Nama Penyakit</td><td><input name="nm_penyakit" type="text" value="<?php echo"$cari[nm_penyakit]"; ?>"/></td></tr>
    <tr><td>Keterangan Penyakit</td><td><textarea name="ket" type="text"><?php echo"$cari[ket]"; ?></textarea></td></tr>
    <tr><td>Solusi</td><td><textarea name="solusi" type="text" ><?php echo"$cari[solusi]"; ?></textarea></td></tr>
    <tr><td></td><td><input name="simpan" type="submit" value="Simpan"/></td></tr>
</table>
</form>
    