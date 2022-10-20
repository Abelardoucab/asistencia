<?php
$ci=$_GET['ci'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
#btn{width:100%;}#btn2{width:80%;}
</style>
<body>

<div class="container">
<p align="center"><button type="button" id="btn2"  onClick="sal()" class="btn btn-primary btn-sm"><h4>Salir</h4></button></p>
  <h2 align="center" style="color:#06F">Agregar Empleado</h2>
  <p align="center"><img src="../img/logo.jpg" width="183" height="128">
  <p align="center" style="color:#00F">Pulse la imagen para obtener la foto</p>
    <input name="ced" hidden="true"  type="text" id="ced" value="<?=$ci?>" size="6">
  </p>
  <center><div > <iframe id="comunica"  class="embed-responsive-item" src="fu.php" width="180" height="150"></iframe></div></center>
  <form action="/action_page.php">
    <div class="form-group"></div>

<center><table width="200" border="0">
  <tr>
  
  </tr>
  <tr>
    <td>  <button type="button" id="btn"  onClick="nuevo()" class="btn btn-primary btn-sm">Otro Empleado</button></td>
  </tr>
  <tr>
    <td><input name="ci" type="text" id="ci" placeholder="Documento Identidad" value="<?=$ci?>" size="35"></td>
    </tr>
  <tr>
    <td><input name="nom" type="text" id="nom" size="35" placeholder="Introduzca Nombres"></td>
    </tr>
  <tr>
    <td><input name="ape" type="text" id="ape" size="35" placeholder="Introduzca Apellidos"></td>
    </tr>
  <tr>
    <td><input name="sue" type="text" id="sue" size="35" placeholder="Sueldo en pesos C."></td>
  </tr>
  <tr>
    <td><input name="fechai" type="date" id="fechai" size="35" placeholder="fecha ingreso"></td>
  </tr>
  <tr>
    <td><input name="cargo" type="text" id="cargo" size="35" placeholder="Cargo"></td>
  </tr>
  <tr>
    <td><input name="cel" type="number" id="cel" size="35" placeholder="Celular"></td>
  </tr>
  <tr>
    <td><input name="email" type="text" id="correo" size="35" placeholder="Correo"></td>
  </tr>
  <tr>
    <td><textarea name="dire" cols="35" rows="3" id="dire" placeholder="Dirección"></textarea></td>
  </tr>
  <tr>
    <td><input name="foto" type="text" id="foto" size="35" hidden="true" placeholder="foto"></td>
  </tr>
  <tr>
    <td><button type="button" id="btn"  onClick="guardaemp()" class="btn btn-primary btn-sm">Guardar</button></td>
    </tr>
</table></center>
  </form>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
	document.getElementById('nom').focus();
var ci=document.getElementById('ci').value;
document.getElementById('comunica').src ='fu.php?ci='+ci;
function guardaemp(){
	var ci=document.getElementById('ci').value;
	var nom=document.getElementById('nom').value;
	var ape=document.getElementById('ape').value;
	var sue=document.getElementById('sue').value;
	var fechai=document.getElementById('fechai').value;
	var cargo=document.getElementById('cargo').value;
	var celular=document.getElementById('cel').value;
	var correo=document.getElementById('correo').value;
	var dire=document.getElementById('dire').value;
	$.ajax({

type: "POST",
url: "guarda.php",
data: { ci: ci, nom: nom,ape:ape,sue:sue,fechai:fechai,cargo:cargo,celular:celular,correo:correo,dire:dire }
}).done(function( msg ) {
	v=msg;
	 var cadena = v,
    separador = ",", // un espacio en blanco
    limite    = 2,
    a = cadena.split(separador, limite);
alert ("valor1="+a[0]+"valor2="+a[1]);
});
	
	
}
function nuevo(){
window.location="registro.php";
}
function sal(){
	window.location="../index.html";
}
</script>