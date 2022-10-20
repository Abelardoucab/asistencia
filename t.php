<?php
$ampm="";
date_default_timezone_set('America/Bogota');
//echo "La hora en colombia es: " . date ("H:i",time()) . "<br />";
$fecha =date('d-m-Y ')  ;
//echo "<br> fechita=$fecha<br>";
  // echo myDate('h:i:s:a'); echo "<br>";
   $hora1= date ("H:i",time());
//echo "<br> $hora1";
$hora=$hora1;
 //  $fecha=date('d-m-Y'); echo "<br>";
$Hhora1=substr($hora,0,2);
 $Mhora1=substr($hora,3,2);
$total=($Hhora1*60)+$Mhora1+30;

$TM=($total%60);$TH=intval($total/60); 
$TH=substr($hora,0,2);
//echo "<br><br> En mas fino  t.php TH=$TH <br><br>";
$TM=substr($hora,3,2);
if ($TH==12){$TH=12;$ampm=":pm";}
if ($TH<12){$ampm=":am";}
if ($TH>12){$TH=$TH-12;$ampm=":pm";}


//echo "<br> es TH=$TH";

if($TH<10){$TH="0".$TH;}
$hora=$TH.":".$TM.$ampm;
//echo "<br> es fino TH=$TH";
//echo " t.php de fecha $fecha valor de hora t ".$hora; echo '<br>';
if (strlen($hora)==9){$hora=substr($hora,1,8);}
//echo "<br> Se recibó a las  $hora del  $fecha <br>";
?>