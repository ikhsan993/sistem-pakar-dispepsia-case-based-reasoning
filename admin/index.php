<?php
	session_start();
	if(!empty($_SESSION['namaadm']) && !empty($_SESSION['passadm'])){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container1">
    <div class="grid">
    <img src="images/banner.jpg" width="100%" />
    </div>
    </div>
    <div class="container2">
    <div class="grid">
    <div class="dh13">
             
<ul>
  
  <li><a href="<?php echo"?p=penyakit";?>">Penyakit</a></li>
  <li><a href="<?php echo"?p=gejala";?>">Gejala</a></li>
  <li><a href="<?php echo"?p=basiskasus";?>">Basis Kasus</a></li>
   <li><a href="<?php echo"?p=hasilkonsultasi";?>">Riwayat Konsultasi</a></li>
  <li><a href="<?php echo"?p=logout";?>">Logout</a></li>
  
 
</ul>
</div>
<div class="dh10">
<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
	<?php
		if ($_GET["p"] == "penyakit"){
			include "penyakit.php";
		}else if ($_GET["p"] == "addpenyakit"){
			include "addpenyakit.php";
		}else if ($_GET["p"] == "addpenyakitaksi"){
			include "addpenyakitaksi.php";
		}else if ($_GET["p"] == "editpenyakit"){
			include "editpenyakit.php";
		}else if ($_GET["p"] == "editpenyakitaksi"){
			include "editpenyakitaksi.php";
		}else if ($_GET["p"] == "hapuspenyakit"){
			include "hapuspenyakit.php";
		}else if ($_GET["p"] == "logout"){
			include "logout.php";
		}else if ($_GET["p"] == "gejala"){
			include "gejala.php";
		}else if ($_GET["p"] == "addgejala"){
			include "addgejala.php";
		}else if ($_GET["p"] == "hapusgejala"){
			include "hapusgejala.php";
		}else if ($_GET["p"] == "editgejala"){
			include "editgejala.php";
		}else if ($_GET["p"] == "basiskasus"){
			include "basiskasus.php";
		}else if ($_GET["p"] == "addbasiskasus"){
			include "addbasiskasus.php";
		}else if ($_GET["p"] == "hapusbasiskasus"){
			include "hapusbasiskasus.php";
		}else if ($_GET["p"] == "editbasiskasus"){
			include "editbasiskasus.php";
		}else if ($_GET["p"] == "hasilkonsultasi"){
			include "hasilkonsultasi.php";
		}else if ($_GET["p"] == "hapushasilkonsultasi"){
			include "hapushasilkonsultasi.php";
		}
		?>
</div>
</div>

</div>
</div>


 <div class="container3">
       		<div class="grid">
            	<div class="dh12">
                </div>
                </div>
                </div>
               
</body>
</html>

 <?php
	}else{
			include "login.php";
		}			
			?>