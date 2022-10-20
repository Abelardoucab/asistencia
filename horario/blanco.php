<?php
$blanco="";
$id=$_POST['xx'];
$dia=$_POST['dia'];
include '../conectar/link.php';
if($dia=="lun"){

mysqli_query($conn,"UPDATE horario set lunent='$blanco', lunsal='$blanco' where id= '$id' ");
}
if($dia=="mar"){

mysqli_query($conn,"UPDATE horario set marent='$blanco', marsal='$blanco' where id= '$id' ");
}
if($dia=="mie"){

mysqli_query($conn,"UPDATE horario set mieent='$blanco', miesal='$blanco' where id= '$id' ");
}
if($dia=="jue"){

mysqli_query($conn,"UPDATE horario set jueent='$blanco', juesal='$blanco' where id= '$id' ");
}
if($dia=="vie"){

mysqli_query($conn,"UPDATE horario set vieent='$blanco', viesal='$blanco' where id= '$id' ");
}
if($dia=="sab"){

mysqli_query($conn,"UPDATE horario set sabent='$blanco', sabsal='$blanco' where id= '$id' ");
}
if($dia=="dom"){

mysqli_query($conn,"UPDATE horario set doment='$blanco', domsal='$blanco' where id= '$id' ");
}
echo $id.",".$dia;
?>