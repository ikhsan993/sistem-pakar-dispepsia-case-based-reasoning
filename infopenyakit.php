<table width="747" height="27" border="1">
  <tr>
    <td width="59">No</td>
    <td width="172">Nama Penyakit</td>
    <td width="161">Solusi</td>
  </tr>
  
  <?php
  	$sql=mysqli_query($kon, "select * from penyakit");
	$no=1;
	while($r=mysqli_fetch_array($sql)){
	
  ?>
  
  <tr>
    <td width="59"><?php echo $no; ?></td>
    <td width="172"><?php echo $r['nm_penyakit'] ?></td>
    <td width="161"><?php echo $r['solusi'] ?></td>
  </tr>
  <?php 
  $no++;
  } 
  ?>
  
</table>
