<?php
$k=0;$files="";$file="";$vieja="";
include '../conectar/link2.php';
$conn2=mysqli_query($conn2,"SELECT * FROM fotos WHERE ci='$ci'")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn2))
{
	$k++;
	$vieja= $sacar['destino'];

}

//echo "k=$k; vieja=$vieja";
if($k>0){

    unlink($vieja); //elimino el fichero

}
?>