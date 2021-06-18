<?php
	session_start();
include "koneksi.php";
	$kode = $_GET['kode'];
	$sql	= mysqli_query($kon,"select * from basis_kasus where kd_penyakit='$kode'");
	$data	= mysqli_fetch_array($sql);
	if(mysqli_num_rows($sql) > 0){
		$id_gejala	= $data['id_gejala'];
?>

<!DOCTYPE html>
<html lang="en">


<body>


			<div class="modal-header">
            	<h3>Edit Basis Kasus</h3>
            </div>
            <div style="margin-top:10px;">
            	<form class="form-horizontal" name="form1" method="post" action="" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" for="kd_penyakit">Nama Penyakit</label>
                        <div class="controls">
                            <select class="input-xxlarge" name="kd_penyakit" id="kd_penyakit">
								<?php
									$sp0 = mysqli_query($kon,"select * from penyakit where kd_penyakit='$kode'");
									if($dp0 = mysqli_fetch_array($sp0)){
                                		echo "<option value='$kode'>$kode == $dp0[nm_penyakit]</option>";
									}
								?>
                                <?php
                                    $sp = mysqli_query($kon,"select * from penyakit");
                                    while($dp = mysqli_fetch_array($sp)){
										echo "<option value=$dp[kd_penyakit]>$dp[kd_penyakit] == $dp[nm_penyakit]</option>";
									}
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="gejala">Gejala</label>
                        <div class="controls">
                        	<?php
                            	$sg = mysqli_query($kon,"select * from gejala");
								while($dg = mysqli_fetch_array($sg)){
									echo "<input type='checkbox' name='item[]' id_gejala='item[]' value='$dg[id_gejala]'>";
									echo "  $dg[kd_gejala] == $dg[nm_gejala]<br>";
								}
							?>
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="simpan"></label>
                        <div class="controls">
	                    	<input name="simpan" type="submit" id="simpan" value="Simpan" class="btn btn-success">
                            <input name="batal" type="submit" id="batal" value="Batal" class="btn btn-warning">
						</div>
                    </div>
                    
                    <?php }
					include "koneksi.php";
						if(isset($_POST['simpan'])){
							mysqli_query($kon, "delete from basis_kasus where kd_penyakit='$kode'") or die(mysqli_error());
							
							$jumlah = count($_POST['item']);
							
							for($i=0; $i < $jumlah; $i++){
								$gejala=$_POST['item'][$i];
								
								
								$q=mysqli_query($kon,"insert into basis_kasus(kd_penyakit, id_gejala) values ('$_POST[kd_penyakit]', '$gejala')") or die(mysqli_error());
							}
								
								if($q){
									echo "<script language=javascript> alert('Data Berhasil Disimpan');
											window.location='?p=basiskasus'</script>";
								}
								else{
									echo "Data Gagal Di Simpan";
									echo "Silahkan <a href = '?p=basiskasus'>Ulangi Disini</a>";
								}
						}
						
						if(isset($_POST['batal'])){
							echo "<script language=javascript>
								window.location='?p=basiskasus';
								</script>";
							exit;
						}
					?>
                </form>
			</div>
    	
<br><br><br><br>


</body>
</html>