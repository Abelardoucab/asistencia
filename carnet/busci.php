<?php
$ci=$_POST['c1'];
$sw=0;
include '../conectar/link.php';
$conn=mysqli_query($conn,"SELECT * FROM emp WHERE ci='$ci'")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn))
{
	$sw++;
	

}
echo $sw.",".$ci;
?>