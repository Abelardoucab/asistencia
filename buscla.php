<?php
$cla=$_POST['cla'];
$sw=0;
include 'conectar/link.php';
$conn=mysqli_query($conn,"SELECT * FROM admin WHERE clave='$cla'")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn))
{
	$sw++;
	

}
echo $sw.",".$cla;
?>