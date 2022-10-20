<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$sw=0;$diasem="";$d="";$hent=""; $hsal="";$hdif2="";$mindif2="";$signo="";$blanco="";$nom=""; $ape="";$emp="";
$fecha="";$hora="";$kkk=0;$tt=0;
include '../t.php';
//$ci=4436612;
$ci=$_POST['ci'];
include '../conectar/link.php';
$conn=mysqli_query($conn,"SELECT * FROM emp WHERE ci='$ci'")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn))
{
	$tt++;
	$emp=$sacar['nom']." ".$sacar['ape'];
	$foto=$sacar['foto'];
	$cargo=$sacar['cargo'];
    $nom=$sacar['nom'];
	$ape=$sacar['ape'];
}
//echo "tt=$tt<br>";
if($tt>0){
//$ci=4436612;
include '../conectar/link2.php';
$conn2=mysqli_query($conn2,"SELECT * FROM resumen WHERE ci='$ci' and fecha='$fecha'")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn2))
{
	$kkk++;
	

}

//echo "<br>kk=$kkk fecha=$fecha";
$hoy= strftime("%A ");
$dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
$es = $dias[date('N', strtotime($fecha))];
if($es=="Lunes"){$d="Lun";}if($es=="Martes"){$d="Mar";}if($es=="Miercoles"){$d="Mie";}
if($es=="Jueves"){$d="Jue";}if($es=="Viernes"){$d="Vie";}
if($es=="Sabado"){$d="Sab";}if($es=="Domingo"){$d="dom";}
//echo "d=$d<br>";
include '../conectar/link.php';
$conn=mysqli_query($conn,"SELECT * FROM horario WHERE ci='$ci'")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn))
{
	$sw++;
if($sw>0){
if($d=="Lun"){
$hent=$sacar['lunent'];
$hsal=$sacar['lunsal'];

}
if($d=="Mar"){
$hent=$sacar['marent'];
$hsal=$sacar['marsal'];

}
if($d=="Mie"){
$hent=$sacar['mieent'];
$hsal=$sacar['miesal'];

}
if($d=="Jue"){
$hent=$sacar['jueent'];
$hsal=$sacar['juesal'];

}
if($d=="Vie"){
$hent=$sacar['vieent'];
$hsal=$sacar['viesal'];

}
if($d=="Sab"){
$hent=$sacar['sabent'];
$hsal=$sacar['sabsal'];

}
if($d=="Dom"){
$hent=$sacar['doment'];
$hsal=$sacar['domsal'];

}	

}}	
if($hent!=""){
$hhe=substr($hent,0,2);
$hme=substr($hent,3,2);
$hhs=substr($hsal,0,2);
$hms=substr($hsal,3,2);
$heampm=substr($hent,5,2);
if(($heampm=="pm" ) && ($hhe<12)){
	$hhe=intval($hhe)+12;
}
$hsampm=substr($hsal,5,2);
if(($hsampm=="pm" ) && ($hhs<12)){
	$hhs=intval($hhs)+12;
}

$hte=intval($hhe*60)+intval($hme);
$hts=intval($hhs*60)+intval($hms);
$acumminent=$hte;
$acumminsal=$hts;
//echo "total min horario entrada $hte $heampm   $hme=<br> ";
//echo "total min horario salida $hts $hsampm   $hsal= ";	

//echo "<br>resumen minent=$acumminent=   minsal=$acumminsal<br>";
//_____________________________________________________-
//echo "<br> paso por aqui kk=$kkk";

if($kkk==0){
$esntroh=substr($hora,0,2);
$relojampm=substr($hora,6,2);
if(($relojampm=="pm" ) && ($esntroh<12)){
	$esntroh=intval($esntroh)+12;
}
$esntrom=substr($hora,3,2);

$relojh=intval($esntroh)*60;
$relojt=intval($relojh)+intval($esntrom);
//echo "<br>hora entrada $esntroh  min entrada $esntrom  total minreloj=$relojt relojampm=$relojampm ";
//operciones
$resent=$relojt-$hte; 
if($resent>=0){$signo="Retardado";}if($resent<0){$signo="Normal";}
if($resent<0){intval($resent=$resent)*(-1);}
$hdif=intval($resent/60);$hdif2=$hdif;

$mindif=$resent % 60;
if($mindif<0){$mindif=$mindif*(-1);}
$mindif2=$mindif;


//echo "<br>ahora mindif=$mindif";
if($hdif2<0){$hdif2=$hdif2*(-1);}
	if($mindif2<0){$mindif2*(-1);}
//echo "<br>diferencia en minutos = $resent horas retardada=$hdif minutos=$mindif=";
if($hdif<0){$hdif=$hdif*(-1);}
if($mindif<0){$mindif*(-1);}
//echo "<br>hdif=$hdif<br>";
if($hdif<10){$hdif2="0".$hdif;}

 if(intval($mindif)<10){$mindif2="0".$mindif;}
$tentrada=$hdif2.":".$mindif2;
 $tentrada= str_replace('-', '', $tentrada);
//echo "<br>diferencia en minutos = $resent horas retardada=$hdif2 minutos=$mindif2 status=$signo esto es  $tentrada ";
include '../conectar/link.php';
$query =  "INSERT into resumen(ci,dia,horaentrada,entro,difent,statusent,horasalida,salio,difsal,statussal,fecha)values('" . $ci. "','" . $d. "','" . $hent. "','" . $hora. "','" . $tentrada. "','" . $signo. "','" . $hsal. "','" . $blanco. "','" . $blanco. "','" . $blanco. "','" . $fecha. "')";
$success = $conn->query($query);
}
if($kkk>0){
	$horasalio=substr($hora,0,2);
	$minsalio=substr($hora,3,2);
	
    $relojampm=substr($hora,6,2);
if(($relojampm=="pm" ) && ($horasalio<12)){
	$horasalio=intval($horasalio)+12;
}
	$mintotsalio=intval(($horasalio*60))+intval($minsalio);
	
	$difsal=$acumminsal-$mintotsalio;
	if($difsal<0){$signo="Normal";}
	else{$signo="Antes";}
	$horados=intval($difsal/60);$hora22=$horados;
	$mindos= $difsal % 60;$min22=$mindos;
	if($hora22<0){$hora22=intval($hora22*(-1));}
	if($min22<0){$min22=intval($min22*(-1));}
	//echo "<br> minsalio=$minsalio hora salio  $horasalio  $mintotsalio sip hora22=$hora22 min22=$min22";
	
	if($hora22<10){$hora22="0".$hora22;}
	if($min22<10){$min22="0".$min22;}
	$tsalida=$hora22.":".$min22;
	
//echo "<br>hora salida $hsal  , salió $hora hora22=$hora22 min22=$min22 tsalida $tsalida";

include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE resumen set salio='$hora', difsal='$tsalida', statussal='$signo' where ci= '$ci' and fecha='$fecha'");
}}}
if($hent==""){
	$cargo="Usuario no labora hoy ";
}
if($tt==0){
	$foto="no.jpg";
	$nom="No esta";
	$ape="Base de datos";
	$cargo="";
}
echo $tt.",".$nom.",".$ape.",".$cargo.",".$foto;
?>