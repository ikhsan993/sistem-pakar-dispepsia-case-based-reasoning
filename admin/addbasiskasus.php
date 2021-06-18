<?php
	session_start();
	include "koneksi.php";
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Gejala</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="shortcut icon" href="../img/favicon.png"/>
	<link href="../style/bootstrap.min.css" rel="stylesheet" media="screen">
    
	<style>
		body{
			background-image: url(../img/body.jpg);
			background-repeat: repeat;
			background-attachment: fixed;
		}
	</style>
</head>

<body>

<?php
	
?>
<div class="container">
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
			<div class="modal-header">
            	<h3>Tambah Basis Kasus</h3>
            </div>
            <div style="margin-top:10px;">
            	<form class="form-horizontal" name="form1" method="post" action="" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" for="kode">Nama Penyakit</label>
                        <div class="controls">
                            <select name='kd_penyakit' id='kd_penyakit' class='input-xxlarge'>;
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
                        <label class="control-label" for="nama">Gejala</label>
                        <div class="controls">
                        	<?php
                            	$sg = mysqli_query($kon,"select * from gejala");
								while($dg = mysqli_fetch_array($sg)){
									echo"<input type='checkbox' name='item[]' id_gejala='item[]' value='$dg[id_gejala]'>";
									echo"  $dg[kd_gejala] == $dg[nm_gejala]<br>";
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
                    
                    <?php
						if(isset($_POST['simpan'])){
							$jumlah = count($_POST['item']);
							
							for($i=0; $i < $jumlah; $i++){
								$gejala=$_POST['item'][$i];
								$q=mysqli_query($kon,"insert into basis_kasus(kd_penyakit, id_gejala) values ('$_POST[kd_penyakit]', $gejala)") or die(mysqli_error()); 
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
    	</div>
</div>

<br><br><br><br>


</body>
</html>