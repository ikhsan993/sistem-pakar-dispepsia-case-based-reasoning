<table>
	<tr>
		<th>No</th>
        <th>Kode Gejala</th>
    	<th>Nama Gejala</th>
        <th>B1</th>
        <th>B2</th>
        <th>B3</th>
        <th>B4</th>
        <th>B5</th>
        <th>B6</th>
    	<!-- <th>Edit</th>
    	<th>Hapus</th> -->
    </tr>

<br>
  <!-- <a href="<?php echo"?p=addgejala";?>" class="button"> Tambah Gejala</a> -->
   
   <?php
   	include "koneksi.php";
	$sqladm = "select * from gejala";
	$gejala = mysqli_query($kon, $sqladm);
	$no = 1;
	while($radm = mysqli_fetch_array($gejala)){
		echo "<tr>
		<td><center>" .$no. "</td>
		<td><center>" .$radm['kd_gejala']. "</td>
		<td>" .$radm['nm_gejala']. "</td>
		<td><center>" .$radm['b1']. "</td>
		<td><center>" .$radm['b2']. "</td>
		<td><center>" .$radm['b3']. "</td>
		<td><center>" .$radm['b4']. "</td>
		<td><center>" .$radm['b5']. "</td>
		<td><center>" .$radm['b6']. "</td>
		<!-- <td><center><a href='?p=editgejala&edit=$radm[kd_gejala]'>Edit</center><input type='hidden' name'edit' value='".$radm['id_gejala']."'>
</td> 

	<td><center><a href='?p=hapusgejala&hapus=$radm[kd_gejala]' onClick=\"return confirm('Yakin ingin hapus?')\">Hapus</center><input type='hidden' name'hapus' value='".$radm['id_gejala']."'>
</td>
-->
		</tr>";
		$no++;
		}
		?>
</table>	