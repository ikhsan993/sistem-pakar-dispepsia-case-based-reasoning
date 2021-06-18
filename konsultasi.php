<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<body>	
<?php if(!empty($_SESSION['namapas']) && ($_SESSION['passpas'])){
?>
        <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
			<div>
            	
                
                <div style="margin-top:10px">
                    <form name="form1" method="post" action="">
                        <table class="table table-condensed table-hover">
						<div id="view"><h3 align="center" class="teal"> Silahkan jawab pertanyaan berikut ini untuk memeriksa gejala yang anda rasakan</h3></div>
                            <?php 
                                $sg = mysqli_query($kon,"select * from gejala");
                                while($dg = mysqli_fetch_array($sg)){
                                    echo
                                    "<tr>
                                        <td class='text-center' width='2%'><input type='checkbox' name='item[]' id_gejala='item[]' value='$dg[id_gejala]'></td>
                                        <td class='text-left text-error' width='98%'> $dg[question]</td>		
                                    </tr>";
                                }
                            ?>
                        </table>
                        <div>
                            <input type="submit" class="btn btn-success" name="periksa" id="periksa" value="Periksa Konsultasi"> 
                        </div>
                            
                        <?php
							if(isset($_POST['periksa'])){
								$jumlah = count($_POST["item"]);
								
								if($jumlah<1){
									echo "<script language=javascript>
											alert('Pilih satu atau beberapa gejala untuk melakukan konsultasi');
											window.location='?p=konsultasi'</script>";
								}else if($jumlah>=4){
								if($jumlah>110){
									echo "<script language=javascript>
											alert('Maksimal Inputkan 11 Gejala. Mohon Diulangi Kembali');
											window.location='?p=konsultasi'</script>";
								}else if($jumlah<=110){
								$sk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
								$dk = mysqli_fetch_array($sk);
								$k=$dk['konsultasi'];
								$konsultasi=$k+1;
								$id_user=$_SESSION['id_user'];
								
									for($i=0; $i < $jumlah; $i++){
										$gejala = $_POST["item"][$i];
										
										$sb = mysqli_query($kon,"select * from gejala where id_gejala=$gejala");
										$rb = mysqli_fetch_array($sb);
										$b1 = $rb['b1'];
										$b2 = $rb['b2'];
										$b3 = $rb['b3'];
										$b4 = $rb['b4'];
										$b5 = $rb['b5'];
										$b6 = $rb['b6'];

										$q=mysqli_query($kon,"insert into hasil_konsultasi(id_user, konsultasi, id_gejala, b1, b2, b3, b4, b5, b6, waktu) value ('$id_user', $konsultasi, '$gejala', '$b1', '$b2', '$b3', '$b4', '$b5', '$b6', NOW())") or die(mysqli_error());
										
										if ($q){
											$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
											$r = mysqli_fetch_array($nk);
											echo "<script language=javascript>
													alert('Lihat Hasil');
													window.location='?p=hasil&id=$id_user&konsultasi=$r[konsultasi]';
													</script>";
										}
										else{
											echo "Konsultasi Gagal";
											echo "Silahkan <a href = '?p=konsultasi'>Ulangi Disini</a>";
										}
									}                            
								}
							}
							}
                        ?>
                    </form>
				</div>
			</div>
		</div>


<br><br><br><br>
<?php }else{
		echo "<script language='javascript'>
		alert('Sebelum melakukan Konsultasi, silahkan login terlebih dahulu');
		window.location=('?p=login')</script>";
} ?>

</body>
</html>