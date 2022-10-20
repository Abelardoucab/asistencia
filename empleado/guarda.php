<?php
$ci=$_POST['ci'];
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$sue=$_POST['sue'];
$fechai=$_POST['fechai'];
$cargo=$_POST['cargo'];
$cel=$_POST['celular'];
$correo=$_POST['correo'];
$dire=$_POST['dire'];
$foto="";



include '../conectar/link.php';
$query =  "INSERT into emp(ci,nom,ape,sue,fechai,cargo,cel,correo,dire,foto)values('" . $ci. "','" . $nom. "','" . $ape. "','" . $sue. "','" . $fechai. "','" . $cargo. "','" . $cel. "','" . $correo. "','" . $dire. "','" . $foto. "')";
$success = $conn->query($query);

if (!$success) {
    die("Intento fallido no conecto: ".$conn->error);
 
}
$sw=0;
include '../conectar/link3.php';
$conn3=mysqli_query($conn,"SELECT * FROM fotos WHERE ci='$ci'")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn3))
{
	$sw++;
	$foto= $sacar['foto'];

}


include ('../conectar/link2.php');
mysqli_query($conn2,"UPDATE emp set foto='$foto'  where ci= '$ci' ");

echo $sw.",".$ci;
?>