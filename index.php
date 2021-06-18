<?php
	session_start();
	include "koneksi.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="gaya.css" />
</head>

<body>
	<div class="container1">
    <div class="grid">
<img src="image/banner.jpg" width="100%" />
   
    </div>
    </div>
          <div class="container2">
          <div class="grid">
          <div class="dh13">   
<ul>
  <li><a href="<?php echo"?p=home";?>">Home</a></li>
  <li><a href="<?php echo"?p=konsultasi";?>">Konsultasi</a></li>
  <li><a href="<?php echo"?p=hasilkonsul";?>">Riwayat Konsultasi</a></li>
  <li><a href="<?php echo"?p=petunjuk";?>">Petunjuk</a></li>
  
  <?php if(!empty($_SESSION['namapas']) && !empty($_SESSION['passpas'])){ ?>
    	<li><a href="logout.php">Logout</a></li>
  <?php }else{ ?>
  		<li><a href="<?php echo "?p=login"; ?>">Login</a></li>
   <?php } ?>
   <li><a href="<?php echo"?p=registrasi";?>">Registrasi</a></li>
 
</ul>
</div>
<div class="dh9">
<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
	<?php
		if ($_GET["p"] == "konsultasi"){
			include "konsultasi.php";
		}else if ($_GET["p"] == "hasilkonsul"){
			include "hasilkonsul.php";
		}else if ($_GET["p"] == "lupapass"){
			include "lupapass.php";
		}else if ($_GET["p"] == "petunjuk"){
			include "petunjuk.php";
		}else if ($_GET["p"] == "login"){
			include "login.php";
		}else if ($_GET["p"] == "registrasi"){
			include "registrasi.php";
		}else if ($_GET["p"] == "hasil"){
			include "hasil.php";
		}else if($_GET["p"] == "home"){
			include "home.php";
		}else if ($_GET["p"] == "regscs"){
			include "regscs.php";
		}else{
			include "home.php";
		}
		?>
</div>
<div class="dh3">
 <?php include "sidebar.php"; ?>
 </div>
</div>

</div>
</div>             
               
</body>
</html>