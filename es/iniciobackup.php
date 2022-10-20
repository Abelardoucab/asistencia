<?php


?>
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
  <h2 align="center" style="color:#00F">Control de Acceso</h2>
  <p align="center" style="color:#00F"><img src="../img/logo.jpg" width="159" height="126"></p>
  <center><table width="200" border="0">
    <tr>
      <td id="nomb" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td id="ape" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td >&nbsp;</td>
    </tr>
    <tr>
      <td id="foto" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td id="cargo" align="center">&nbsp;</td>
    </tr>
  </table>
  </center>
  <p align="center" style="color:#00F">&nbsp;</p>
  <p align="center" style="color:#00F">&nbsp;</p>
 <center> <table width="200" border="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">
        <input type="text" name="acceso" onChange="acceso()" id="acceso" placeholder="Ubique el cursor aqui">
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table></center>
  <p align="center" style="color:#00F">&nbsp;</p>
  <p id="malo" style="color:#F00" align="center"></p>
  <form action="/action_page.php">
    <div class="form-group">
      <div align="center"></div>
    </div>
    <div class="form-group"></div>
    <div class="form-group form-check"></div>
    <!--<button  type="button" id="btn" onClick="fino()" class="btn btn-primary btn-sm"><h5>Siguiente</h5></button>-->
  </form>
</div>

</body>
</html>
	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
	document.getElementById('acceso').focus()
	function acceso(){
		var  ci=document.getElementById('acceso').value;
		
		$.ajax({

type: "POST",
url: "acceso.php",
data: { ci: ci }
}).done(function( msg ) {
	v=msg;
	 var cadena = v,
    separador = ",", // un espacio en blanco
    limite    =5,
    a = cadena.split(separador, limite);
alert ("valor1="+a[0]+"valor2="+a[1]+"valor3="+a[2]+"valor3="+a[3]);
if(a[0]>0){
	document.getElementById('nomb').innerHTML=a[1];
	document.getElementById('ape').innerHTML=a[2];
	document.getElementById('cargo').innerHTML=a[3];
	var foto="../file/"+a[4];
	document.getElementById('foto').innerHTML='<img src='+foto+'>'
     
	}
document.getElementById('acceso').value="";

});
		
	}
	
	
	
	
	</script>