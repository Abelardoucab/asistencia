<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$sw=0;
$ci=$_POST['ci'];
$dia=$_POST['dia'];
$entsal=$_POST['entsal'];
$to=$_POST['todo'];
$lunent="";$lunsal="";
$marent="";$marsal="";
$mieent="";$miesal="";
$jueent="";$juesal="";
$vieent="";$viesal="";
$sabent="";$sabsal="";
$doment="";$domsal="";
//echo " $ci    $dia    $entsal   $to ";
include '../conectar/link.php';
$conn=mysqli_query($conn,"SELECT * FROM horario WHERE ci='$ci'")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn))
{
	$sw++;
	

}
if($sw==0){
	if($dia=="Lun" && $entsal=="Ent"){
		$lunent=$to;
		include '../conectar/link2.php';
$query =  "INSERT into horario(ci,lunent,lunsal,marent,marsal,mieent,miesal,jueent,juesal,vieent,viesal,sabent,sabsal,doment,domsal)values('" . $ci. "','" . $lunent. "','" . $lunsal. "','" . $marent. "','" . $marsal. "','" . $mieent. "','" . $miesal. "','" . $jueent. "','" . $juesal. "','" . $vieent. "','" . $viesal. "','" . $sabent. "','" . $sabsal. "','" . $doment. "','" . $domsal. "')";
$success = $conn2->query($query);

if (!$success) {
    die("Intento fallido no conecto: ".$conn2->error);
 
}
	}

if($dia=="Mar" && $entsal=="Ent"){
		$marent=$to;
		include '../conectar/link2.php';
$query =  "INSERT into horario(ci,lunent,lunsal,marent,marsal,mieent,miesal,jueent,juesal,vieent,viesal,sabent,sabsal,doment,domsal)values('" . $ci. "','" . $lunent. "','" . $lunsal. "','" . $marent. "','" . $marsal. "','" . $mieent. "','" . $miesal. "','" . $jueent. "','" . $juesal. "','" . $vieent. "','" . $viesal. "','" . $sabent. "','" . $sabsal. "','" . $doment. "','" . $domsal. "')";
$success = $conn2->query($query);

if (!$success) {
    die("Intento fallido no conecto: ".$conn2->error);
 
}
	}

	if($dia=="Mie" && $entsal=="Ent"){
		$mieent=$to;
		include '../conectar/link2.php';
$query =  "INSERT into horario(ci,lunent,lunsal,marent,marsal,mieent,miesal,jueent,juesal,vieent,viesal,sabent,sabsal,doment,domsal)values('" . $ci. "','" . $lunent. "','" . $lunsal. "','" . $marent. "','" . $marsal. "','" . $mieent. "','" . $miesal. "','" . $jueent. "','" . $juesal. "','" . $vieent. "','" . $viesal. "','" . $sabent. "','" . $sabsal. "','" . $doment. "','" . $domsal. "')";
$success = $conn2->query($query);

if (!$success) {
    die("Intento fallido no conecto: ".$conn2->error);
 
}
	}	
		
if($dia=="Jue" && $entsal=="Ent"){
		$jueent=$to;
		include '../conectar/link2.php';
$query =  "INSERT into horario(ci,lunent,lunsal,marent,marsal,mieent,miesal,jueent,juesal,vieent,viesal,sabent,sabsal,doment,domsal)values('" . $ci. "','" . $lunent. "','" . $lunsal. "','" . $marent. "','" . $marsal. "','" . $mieent. "','" . $miesal. "','" . $jueent. "','" . $juesal. "','" . $vieent. "','" . $viesal. "','" . $sabent. "','" . $sabsal. "','" . $doment. "','" . $domsal. "')";
$success = $conn2->query($query);

if (!$success) {
    die("Intento fallido no conecto: ".$conn2->error);
 
}
	}		
	
	if($dia=="Vie" && $entsal=="Ent"){
		$vieent=$to;
		include '../conectar/link2.php';
$query =  "INSERT into horario(ci,lunent,lunsal,marent,marsal,mieent,miesal,jueent,juesal,vieent,viesal,sabent,sabsal,doment,domsal)values('" . $ci. "','" . $lunent. "','" . $lunsal. "','" . $marent. "','" . $marsal. "','" . $mieent. "','" . $miesal. "','" . $jueent. "','" . $juesal. "','" . $vieent. "','" . $viesal. "','" . $sabent. "','" . $sabsal. "','" . $doment. "','" . $domsal. "')";
$success = $conn2->query($query);

if (!$success) {
    die("Intento fallido no conecto: ".$conn2->error);
 
}
	}		

if($dia=="Sab" && $entsal=="Ent"){
		$sabent=$to;
		include '../conectar/link2.php';
$query =  "INSERT into horario(ci,lunent,lunsal,marent,marsal,mieent,miesal,jueent,juesal,vieent,viesal,sabent,sabsal,doment,domsal)values('" . $ci. "','" . $lunent. "','" . $lunsal. "','" . $marent. "','" . $marsal. "','" . $mieent. "','" . $miesal. "','" . $jueent. "','" . $juesal. "','" . $vieent. "','" . $viesal. "','" . $sabent. "','" . $sabsal. "','" . $doment. "','" . $domsal. "')";
$success = $conn2->query($query);

if (!$success) {
    die("Intento fallido no conecto: ".$conn2->error);
 
}
	}		
if($dia=="Dom" && $entsal=="Ent"){
		$doment=$to;
		include '../conectar/link2.php';
$query =  "INSERT into horario(ci,lunent,lunsal,marent,marsal,mieent,miesal,jueent,juesal,vieent,viesal,sabent,sabsal,doment,domsal)values('" . $ci. "','" . $lunent. "','" . $lunsal. "','" . $marent. "','" . $marsal. "','" . $mieent. "','" . $miesal. "','" . $jueent. "','" . $juesal. "','" . $vieent. "','" . $viesal. "','" . $sabent. "','" . $sabsal. "','" . $doment. "','" . $domsal. "')";
$success = $conn2->query($query);

if (!$success) {
    die("Intento fallido no conecto: ".$conn2->error);
 
}
	}		
	
}

if($sw>0){echo "Entro mayor que cero to=$to entsal=$entsal";
	if($dia=="Lun" && $entsal=="Ent"){
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set lunent='$to' where ci= '$ci' ");
	}
	
	if($dia=="Lun" && $entsal=="Sal"){ echo "  entro en sal";
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set lunsal='$to' where ci= '$ci' ");
	}
	if($dia=="Mar" && $entsal=="Ent"){
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set marent='$to' where ci= '$ci' ");
	}
	
	if($dia=="Mar" && $entsal=="Sal"){ echo "  entro en sal";
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set marsal='$to' where ci= '$ci' ");
	}

  if($dia=="Mie" && $entsal=="Ent"){
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set mieent='$to' where ci= '$ci' ");
	}
	
	if($dia=="Mie" && $entsal=="Sal"){ echo "  entro en sal";
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set miesal='$to' where ci= '$ci' ");
	}
 if($dia=="Jue" && $entsal=="Ent"){
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set jueent='$to' where ci= '$ci' ");
	}
	
	if($dia=="Jue" && $entsal=="Sal"){ echo "  entro en sal";
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set juesal='$to' where ci= '$ci' ");
	}
if($dia=="Vie" && $entsal=="Ent"){
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set vieent='$to' where ci= '$ci' ");
	}
	
	if($dia=="Vie" && $entsal=="Sal"){ echo "  entro en sal";
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set viesal='$to' where ci= '$ci' ");
	}
	
	if($dia=="Sab" && $entsal=="Ent"){
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set sabent='$to' where ci= '$ci' ");
	}
	
	if($dia=="Sab" && $entsal=="Sal"){ echo "  entro en sal";
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set sabsal='$to' where ci= '$ci' ");
	}
	if($dia=="Dom" && $entsal=="Ent"){
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set doment='$to' where ci= '$ci' ");
	}
	
	if($dia=="Dom" && $entsal=="Sal"){ echo "  entro en sal";
	
	include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE horario set domsal='$to' where ci= '$ci' ");
	}
}
echo $ci."*".$lunent."*".$lunsal."*".$marent."*".$marsal."*".$mieent."*".$miesal."*".$jueent."*".$juesal."*".$vieent."*".$viesal."*".$sabent."*".$sabsal."*".$doment."*".$domsal
?>