<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
#btn{width:100%;}
</style>
<body>

<div class="container">
  <h2 align="center" style="color:#06F">Registro</h2>
  <p align="center"><img src="../img/logo.jpg" width="183" height="128"></p>
  <p id="malo" style="color:#F00" align="center"></p>
  <form action="/action_page.php">
    <div class="form-group"></div>

<center><table width="200" border="0">
  <tr>
    <td><input name="ci1" type="text" id="ci1" size="35" placeholder="Documento Identidad"></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input name="ci2" type="text" onClick="busci()" id="ci2" size="35" placeholder="Repita Documento Identidad"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><button type="button" id="btn" onClick="compara()" class="btn btn-primary">Siguiente</button></td>
  </tr>
</table></center>
  </form>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
document.getElementById('ci1').focus()
function busci(){
	var ci=document.getElementById('ci1').value;
	 $.ajax({

type: "POST",
url: "busci.php",
data: {  ci:ci }
}).done(function( msg ) {
	v=msg;
	 var cadena = v,
    separador = ",", // un espacio en blanco
    limite    = 2,
    a = cadena.split(separador, limite);
//alert ("valor1="+a[0]+"valor2="+a[1]);
if(a[0]>0){
	document.getElementById('malo').innerHTML='Documento de identidad '+a[1]+' ya esta en la base de datos';
	document.getElementById('ci1').focus();
	return;
}
});
}
function compara(){
	var c1=document.getElementById('ci1').value
	var c2=document.getElementById('ci2').value
	if(c1==""){
		document.getElementById('malo').innerHTML="Introduzca cédula de identidad primera casilla";
		document.getElementById('ci1').focus();
		return;
	}
		
	if(c2==""){
		document.getElementById('malo').innerHTML="Introduzca cédula de identidad segunda casilla";
		document.getElementById('ci2').focus();
		return;
	}	
		if(c1!=c2){
			document.getElementById('malo').innerHTML="Verifique la cedula de identidad, no coinciden";
			document.getElementById('ci1').focus();
			return;
		}
		window.location='agre.php?ci='+c1;
}
</script>
