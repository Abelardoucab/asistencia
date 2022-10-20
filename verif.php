<?php
$cla=$_POST['cla'];
$usu=$_POST['usu'];
$sw=0;$to="";
include 'conectar/link.php';
$conn=mysqli_query($conn,"SELECT * FROM admin WHERE clave='$cla' and usuario='$usu'")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn))
{
	$sw++;
	

}
if($sw==0){
	$to=$cla." ".$usu;
}
echo $sw.",".$to;
?>