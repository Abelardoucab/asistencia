<!DOCTYPE html>
<html lang="en">
<head>
  <title>Incio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  #btn{width:100%;}
  </style>
</head>
<body>

<div class="container">
<p><button  type="button" id="btn" onClick="sal()" class="btn btn-primary btn-sm"><h5>Salida</h5></button></p>
  <h2 align="center" style="color:#00F">Horario</h2>
  <p align="center" style="color:#00F"><img src="../img/logo.jpg" width="159" height="126"></p>
  <p id="malo" style="color:#F00" align="center"></p>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Documento de identidad:</label>
      <input type="number" class="form-control" id="c1" placeholder="Documento de Identidad" name="c1">
    </div>
    <div class="form-group">
      <label for="pwd">Repita Documento de identidad:</label>
      <input type="number" class="form-control" onClick="bus()" id="c2" placeholder="Repita Documento de Identidad" name="c2">
    </div>
    <div class="form-group form-check"></div>
    <button  type="button" id="btn" onClick="fino()" class="btn btn-primary btn-sm"><h5>Siguiente</h5></button>
  </form>
</div>

</body>
</html>
	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
	document.getElementById('c1').focus()
	function sal(){
		window.location="../index.html";
	}
	function bus(){
		var c1=document.getElementById('c1').value
		if(c1==""){
			document.getElementById('malo').innerHTML="Introduzca cedula de identidad";
			document.getElementById('c1').focus();
			return;
		}
	
 $.ajax({

type: "POST",
url: "../carnet/busci.php",
data: {  c1:c1 }
}).done(function( msg ) {
	v=msg;
	 var cadena = v,
    separador = ",", // un espacio en blanco
    limite    = 2,
    a = cadena.split(separador, limite);
//alert ("valor1="+a[0]+"valor2="+a[1]);
if(a[0]==0){
	document.getElementById('malo').innerHTML="Documento de identidad no esta en la base de datos";
	document.getElementById('c1').focus();
	return;
}

});
		
	}
	function fino(){
		var c1=document.getElementById('c1').value
		var c2=document.getElementById('c2').value
		if(c1==""){
			document.getElementById('malo').innerHTML="Introduzca cedula de identidad primera casilla";
			document.getElementById('c1').focus();
			return;
		}
		if(c2==""){
			document.getElementById('malo').innerHTML="Introduzca cedula de identidad segunda casilla";
			document.getElementById('c1').focus();
			return;
		}
		
		if(c1!=c2){
			document.getElementById('malo').innerHTML="No coinciden los documentos de identidad";
			document.getElementById('c1').focus();
			return;
		}
		window.location="horario.php?ci="+c1;
	}
	
	
	
	
	
	
	
	</script>