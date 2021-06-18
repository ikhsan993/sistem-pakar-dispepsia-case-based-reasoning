<?php
include"koneksi.php";
if(isset($_POST['simpan'])){
	$simpan=mysqli_query($kon,"insert into pasien values ('', '$_POST[username]','$_POST[password]','$_POST[nm_lengkap]', '$_POST[jns_kelamin]', '$_POST[alamat]', '$_POST[no_hp]', '$_POST[pekerjaan]')");
	
	if($simpan){
	echo"<script>
		
		window.location.href='index.php?p=regscs';
	</script>";
	}else{
	echo"<script>
		window.location.href='index.php?p=registrasi';
		</script>";
	}
}
?>
<div id="kat">
<h3 style="text-align:center;
  color:#FFFFFF;
  font-size:22px;
  padding:2px 10px;
  background-color:#006633;">Registrasi Pasien</h3>
<form action='' method="post">
<table>


	<tr>
    	<td>Username</td>
        <td><input name="username" type="text" required /></td>
     </tr>
    <tr><td>Password</td><td><input name="password" type="password" required /></td></tr>
    <tr><td>Nama Lengkap</td><td><input name="nm_lengkap" type="text" required /></td></tr>
    <tr><td>Jenis Kelamin</td><td><select name="jns_kelamin" id="gender" required>
    								<option value="">Silahkan Dipilih</option>
                   					 <option value="L">Laki-Laki</option>
                  					  <option value="P">Perempuan</option>
     </select>
      </td></tr>
      <tr><td>Alamat</td><td><input name="alamat" type="text" required /></td></tr>  
      <tr><td>Nomor Hp</td><td><input name="no_hp" type="number" max="999999999999999" required /></td></tr>   
      <tr><td>Pekerjaan</td><td><input name="pekerjaan" type="text" required /></td></tr>        
    
    <tr><td></td><td><input name="simpan" type="submit" value="Simpan"/></td></tr>
</table>
</form>
  </div>  