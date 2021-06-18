<br>
<table>
	<tr>
		<th>No</th>
        <th>Nama Penyakit</th>
    	<th>Nama Gejala</th>
    	<th>Edit</th>
    	<!--<th>Hapus</th> -->
    </tr>
   <!--
   <a href="<?php echo"?p=addbasiskasus";?>" class="button"> Tambah Basis Kasus</a>
   -->
   <?php
   	include "koneksi.php";
	$i = 1;
	$paruu = mysqli_query($kon, "select * from basis_kasus group by kd_penyakit ASC");
	while($paru = mysqli_fetch_array($paruu)){
		$sp = mysqli_query($kon,"select * from penyakit where kd_penyakit='$paru[kd_penyakit]'");
		$dp = mysqli_fetch_array($sp);
	?>
		<td><?php echo $i;?></td>
        <td><?php echo "$dp[nm_penyakit] ($paru[kd_penyakit])";?></td>
        <td>
        	<?php 
				$sg = mysqli_query($kon,"select * from basis_kasus where kd_penyakit='$paru[kd_penyakit]'");
				
				while($dg = mysqli_fetch_array($sg)){
					$sp1 = mysqli_query($kon,"select * from gejala where id_gejala='$dg[id_gejala]'");
					$dp1 = mysqli_fetch_array($sp1);
					echo "* $dp1[nm_gejala]<br>";
				}
			?>
		<td><a href="?p=editbasiskasus&kode=<?php echo $paru['kd_penyakit'];?>">Edit</a></td>
       <!-- <td><a onClick="return confirm('Yakin ingin hapus?')" href="?p=hapusbasiskasus&kode=<?php echo $paru['kd_penyakit'];?>">Hapus</a>
        
</td> -->

		</tr>
        <?php 
		$i++;
		}
		?>
</table>	