<?php
	session_start();
	include "koneksi.php";
	$id = $_GET['id'];
	$konsultasi = $_GET['konsultasi'];
	
	?>
<title>Cetak Hasil Konsultasi</title>
<body style="background-repeat: no-repeat;background-size: cover;" background="image/test.jpg" onLoad="javascript:window:print()">
<div id="header">
  <div align="center">
    <p>
    <h4>Hasil Konsultasi Pasien</h4>
    </p>
  </div>
</div>


  <table>
    <tr>
    <?php
    $sql = mysqli_query($kon,"select * from pasien where id_user='$_SESSION[id_user]'");
	$row=mysqli_fetch_array($sql);
	if(mysqli_num_rows($sql) > 0){
		$nama = $row['nm_lengkap'];
		$jk = $row['jns_kelamin'];
		$nohp = $row['no_hp'];
		echo "<td><b>Nama Pasien &nbsp;&nbsp;:</b> $nama </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td><b>Jenis Kelamin &nbsp;&nbsp;:</b> $jk </td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td><b>No Hp &nbsp;&nbsp;:</b> $nohp </td>";
		}
		?>
    </tr>
  </table>

 <?php
	$s = mysqli_query($kon,"select * from keterangan,penyakit where keterangan.kd_penyakit=penyakit.kd_penyakit and id_konsultasi='$konsultasi'");
	while($data=mysqli_fetch_array($s)){
			$kd_penyakit=$data['kd_penyakit'];
			$nilai=$data['nilai']*100;
			$nilaiok=number_format($nilai, 2, '.', '');
			$nm_penyakit=$data['nm_penyakit'];
			$id_konsultasi=$data['id_konsultasi'];
			$ket_penyakit=$data['ket'];
			$solusi=$data['solusi'];
	}
	?>

 <table border="0">
    <tr>
      <td><b>Kode Penyakit :</b></td>
      <td><?php echo "$kd_penyakit";?></td>
    </tr>
    <tr>
    	<td><b>Nama Penyakit:</b></td>
        <td> <?php echo "$nm_penyakit";?></td>
    </tr>
	
	<tr>
      <td><b>Nilai:</b> </td>
      <td><?php echo "$nilaiok%";?></td>
	  
    </tr>
	<tr>
      <td><b>Gejala:</b> </td>
      <td>
			<?php
								$sh = mysqli_query($kon,"select * from hasil_konsultasi where konsultasi='$konsultasi' and id_user='$id'");
								
								while($dh = mysqli_fetch_array($sh)){
									$sg = mysqli_query($kon,"select * from gejala where id_gejala='$dh[id_gejala]'");
									$dg = mysqli_fetch_array($sg);
									echo "&raquo; $dg[nm_gejala]<br>";
								}
							?>
                            </td>
    </tr>
	<tr>
      <td><b>Keterangan Penyakit :</b></td><td></b><?php echo "$ket_penyakit";?></td>
    </tr>
	<tr>
      <td><b>Solusi </b></td>
      <td><?php echo "$solusi";?></td>  
    </tr>
    
  </table>
 
</form>
