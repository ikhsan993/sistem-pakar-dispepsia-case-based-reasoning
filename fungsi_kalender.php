<?php
function buatkalender($tanggal,$bulan,$tahun) {      
  $bulanan=array(1=>"Januari","Februari","Maret","April",
                    "Mei","Juni","Juli","Agustus","September", 
                    "Oktober","November","Desember");
					
date_default_timezone_set('Asia/Jakarta'); // PHP 6 mengharuskan penyebutan timezone.
$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];
					
  $tgl=date("d");
  $bln=date("n");
  $thn=date("Y");
  $jmlhari = date("t",mktime(0,0,0,$bulan,1,$tahun));
  $haritglsatu = date("w",mktime(0,0,0,$bulan,1,$tahun));

  $kalender = "<table cellspacing=1 cellpadding=3 
               border=0 class=altrowstable1 width=100%>\n";
  $kalender .= "<tr class=tr_terang>
               <td colspan=7 ><font face=tahoma size=2 color=#49a0fa>$hari_ini $tgl $bulanan[$bln] $thn
               </td></tr>\n";

  $kalender .= "<tr class=tr_judul>
                <td>&nbsp;&nbsp; M</td><td> &nbsp;&nbsp;S</td><td>&nbsp;&nbsp; S</td><td>&nbsp;&nbsp; R</td>
                <td>&nbsp;&nbsp;K</td><td>&nbsp;&nbsp;J</td><td>&nbsp;&nbsp;S</td></tr>\n";
  $a 	  = 1;
  $adabaris   = TRUE;
  $mulaicetak = 0;
  while ($adabaris) {
    $kalender .= "<tr align=center class=tr_terang>";
    for ($i = 0; $i < 7; $i++ ) {
      if ($mulaicetak < $haritglsatu) {
        $kalender .= "<td>&nbsp;</td>";
        $mulaicetak++;
      } 
      elseif ($a <= $jmlhari) {
        $tt = $a;
        if ($a == $tanggal) { 
          $tt = "<span  style='color: #53f80b; font-weight: bold; 
                 font-size: larger; text-decoration: blink;'>$tt</span>"; 
        }
        if ($i == 0) { 
          $tt = "<font color=\"#FF0000\">$tt</font>"; 
        }
        $kalender .= "<td>$tt</td>";
        $a++;
      } 
      else {
        $kalender .= "<td>&nbsp;</td>";
      }
    }
    $kalender .= "</tr>\n";
    if ($a <= $jmlhari) { 
      $adabaris = TRUE; 
    } 
    else { 
      $adabaris = FALSE; 
    }
  }
  $kalender .= "</table>\n";
  return $kalender;
}
?>
