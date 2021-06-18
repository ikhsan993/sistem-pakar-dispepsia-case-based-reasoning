<br>
<table>
	<tr>
		<th>No</th>
        <th>Kode Penyakit</th>
    	<th>Nama Penyakit</th>
        <th>Keterangan Penyakit</th>
        <th>Solusi</th>
    	<th>Edit</th>
    	<!--<th>Hapus</th> -->
    </tr>
   
  <!-- <a href="<?php echo"?p=addpenyakit";?>" class="button"> Tambah Penyakit</a> -->
   
   <?php
   	include "koneksi.php";
	$sqladm = "select * from penyakit";
	$penyakit = mysqli_query($kon, $sqladm);
	$no = 1;
	while($radm = mysqli_fetch_array($penyakit)){
		echo "<tr>
		
		<td>" .$no. "</td>
		<td>" .$radm['kd_penyakit']. "</td>
		<td>" .$radm['nm_penyakit']. "</td>
		<td>" .$radm['ket']. "</td>
		<td>".$radm['solusi']."</td>

		<td><center><a href='?p=editpenyakit&edit=$radm[kd_penyakit]'>Edit</center><input type='hidden' name'edit' value='".$radm['kd_penyakit']."'>
</td>

<!--	<td><center><a onClick=\"return confirm('Yakin ingin hapus?')\" href='?p=hapuspenyakit&hapus=$radm[kd_penyakit]'>Hapus</center><input type='hidden' name'hapus' value='".$radm['kd_penyakit']."'>
</td> -->

		</tr>";
		$no++;
		}
		?>
</table>	