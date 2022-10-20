<?php
$sw=0;
$ci=$_GET['ci'];
include '../conectar/link.php';
$conn=mysqli_query($conn,"SELECT * FROM  emp WHERE ci='$ci'")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn))
{
	$sw++;
	$nom= $sacar['nom'];
	$ape= $sacar['ape'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Horario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
#btn1{width:100%;}
</style>
<body>

<div class="container">
<p><button id="btn1" type="button" onClick="sal()" class="btn btn-primary"><h4>Salida</h4></button></p>
  <h2 align="center" style="color:#00F">Horario</h2>
  <p align="center"><img src="../img/logo.jpg" width="198" height="144"></p>
  <p align="center" style="color:#00F"><?php echo "Empleado: $nom $ape";?></p>
 <center> <table width="200" border="1">
    <tr>
      <td><div align="center">Día</div></td>
      <td><div align="center">Hora</div></td>
      <td><div align="center">Min</div></td>
      <td><div align="center">am/pm</div></td>
      <td>Ent/Sal</td>
    </tr>
    <tr>
      <td><select name="dia" id="dia">
        <option>Click</option>
        <option>Lun</option>
        <option>Mar</option>
        <option>Mie</option>
        <option>Jue</option>
        <option>Vie</option>
        <option>Sab</option>
        <option>Dom</option>
        </select></td>
      <td><select name="hora" id="hora">
        <option>Click</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        </select></td>
      <td><select name="min" id="min">
        <option>Click</option>
        <option>00</option>
        <option>05</option>
        <option>10</option>
        <option>15</option>
        <option>20</option>
        <option>25</option>
        <option>30</option>
        <option>35</option>
        <option>40</option>
        <option>45</option>
        <option>50</option>
        <option>55</option>
        </select></td>
      <td><select name="ampm" id="ampm">
        <option>Click</option>
        <option>am</option>
        <option>pm</option>
        <option>m</option>
        </select></td>
      <td><select name="entsal" id="entsal" onChange="ponelun()">
        <option>Click</option>
        <option>Ent</option>
        <option>Sal</option>
        </select></td>
    </tr>
  </table>
   <span style="color:#00F">
   <input name="ced"  hidden="true"  type="text" id="ced" value="<?=$ci?>" size="6">
   </span><br>
   <table width="200" border="1">
     <tr>
       <td>Dia</td>
       <td>Entrada</td>
       <td>Salida</td>
       <td>Acción</td>
      </tr>
      <?php if ($sw>0){ ?>
      <?php $kk=0;
	  include '../conectar/link3.php';
$conn3=mysqli_query($conn3,"SELECT * FROM horario WHERE ci='$ci'")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn3))
{
	$kk++;
	$lunent= $sacar['lunent'];$lunsal= $sacar['lunsal'];
    $marent= $sacar['marent'];$marsal= $sacar['marsal'];
	$mieent= $sacar['mieent'];$miesal= $sacar['miesal'];
	$jueent= $sacar['jueent'];$juesal= $sacar['juesal'];
	$vieent= $sacar['vieent'];$viesal= $sacar['viesal'];
	$sabent= $sacar['sabent'];$sabsal= $sacar['sabsal'];
	$doment= $sacar['doment'];$domsal= $sacar['domsal'];
?>
     <tr>
       <td>Lun</td>
       <td ><?php echo $lunent ?></td>
      <td ><?php echo $lunsal ?></td>
       <td><div class="dropdown">
  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
    Pulse
  </button>
  <div class="dropdown-menu">
   
       <li><a href="javascript:liblun(<?php echo $sacar['id'];    ?>)">Libre</a></li>
  </div>
</div></td>
      </tr>
     <tr>
       <td>Mar</td>
      <td ><?php echo $marent ?></td>
       <td ><?php echo $marsal ?></td>
       <td><div class="dropdown">
  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
    Pulse
  </button>
  <div class="dropdown-menu">
   
       <li><a href="javascript:libmar(<?php echo $sacar['id'];    ?>)">Libre</a></td>
      </tr>
     <tr>
       <td>Mie</td>
      <td ><?php echo $mieent ?></td>
       <td ><?php echo $miesal ?></td>
       <td><div class="dropdown">
  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
    Pulse
  </button>
  <div class="dropdown-menu">
   
       <li><a href="javascript:libmie(<?php echo $sacar['id'];    ?>)">Libre</a></td>
      </tr>
     <tr>
       <td>Jue</td>
      <td ><?php echo $jueent ?></td>
       <td ><?php echo $juesal ?></td>
       <td><div class="dropdown">
  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
    Pulse
  </button>
  <div class="dropdown-menu">
   
       <li><a href="javascript:libjue(<?php echo $sacar['id'];    ?>)">Libre</a></td>
      </tr>
     <tr>
       <td>Vie</td>
      <td ><?php echo $vieent ?></td>
      <td ><?php echo $viesal ?></td>
       <td><div class="dropdown">
  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
    Pulse
  </button>
  <div class="dropdown-menu">
   
       <li><a href="javascript:libvie(<?php echo $sacar['id'];    ?>)">Libre</a></td>
      </tr>
     <tr>
       <td>Sab</td>
       <td ><?php echo $sabent ?></td>
       <td ><?php echo $sabsal ?></td>
       <td><div class="dropdown">
  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
    Pulse
  </button>
  <div class="dropdown-menu">
   
       <li><a href="javascript:libsab(<?php echo $sacar['id'];    ?>)">Libre</a></td>
      </tr>
     <tr>
       <td>Dom</td>
       <td ><?php echo $doment ?></td>
      <td ><?php echo $domsal ?></td>
       <td><div class="dropdown">
  <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
    Pulse
  </button>
  <div class="dropdown-menu">
   
       <li><a href="javascript:libdom(<?php echo $sacar['id'];    ?>)">Libre</a></td>
      </tr><?php } ?>
   </table><?php  } ?>
   <p>&nbsp;</p>
 </center>
  <p>&nbsp;</p>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
	function ponelun(){
		var ci=document.getElementById('ced').value;
		var dia=document.getElementById('dia').value;
		var hora=document.getElementById('hora').value;
		var minuto=document.getElementById('min').value;
		var ampm=document.getElementById('ampm').value;
		var entsal=document.getElementById('entsal').value;
		var todo=hora+":"+minuto+ampm;
	
		mete(ci,dia,entsal,todo)
		//alert (todo)
	}
	function mete(ci,dia,entsal,todo){
		//alert('entro tod='+todo)
		$.ajax({

type: "POST",
url: "mete.php",
data: { ci:ci,dia: dia,entsal:entsal,todo:todo }
}).done(function( msg ) {
	v=msg;
	 var cadena = v,
    separador = "*", // un espacio en blanco
    limite    = 15,
    a = cadena.split(separador, limite);
//alert ("valor1="+a[0]+"valor2="+a[1]+"valor2="+a[2]+"valor2="+a[3]+"valor2="+a[4]+"valor2="+a[5]+"valor2="+a[6]+"valor2="+a[7]+"valor2="+a[8]+"valor2="+a[9]+"valor2="+a[10]+"valor2="+a[11]+"valor2="+a[12]+"valor2="+a[13]+"valor2="+a[14]);
location.reload();
});
		
		
	}
	function liblun(xx){
		var dia="lun";
		var id=xx;
		blanco(dia,xx);
	}
	function libmar(xx){
		var dia="mar";
		var id=xx;
		blanco(dia,xx);
	}
	function libmie(xx){
		var dia="mie";
		var id=xx;
		blanco(dia,xx);
	}
	function libjue(xx){
		var dia="jue";
		var id=xx;
		blanco(dia,xx);
	}
	function libvie(xx){
		var dia="vie";
		var id=xx;
		blanco(dia,xx);
	}
	function libsab(xx){
		var dia="sab";
		var id=xx;
		blanco(dia,xx);
	}
	function libdom(xx){
		var dia="dom";
		var id=xx;
		blanco(dia,xx);
	}
	function blanco(dia,xx){
		$.ajax({

type: "POST",
url: "blanco.php",
data: {xx: xx, dia: dia }
}).done(function( msg ) {
	v=msg;
	 var cadena = v,
    separador = ",", // un espacio en blanco
    limite    = 2,
    a = cadena.split(separador, limite);
//alert ("valor1="+a[0]+"valor2="+a[1]);
location.reload();  
});
	}
	function sal(){
		window.history.back();    
	}
	</script>