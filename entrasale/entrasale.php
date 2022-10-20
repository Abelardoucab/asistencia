<!DOCTYPE html>
<html lang="en">
<head>
  <title>Entra sale</title>
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
  <h2 align="center" style="color:#00F">Control E/S</h2>
  <p align="center"><img src="../img/logo.jpg" width="209" height="162"></p>
 <center> <table width="209" border="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Desde:&nbsp;<input type="date" name="fecha1" id="fecha1"></td>
    </tr>
    <tr>
      <td>Hasta:&nbsp;
        <input type="date" name="fecha2" id="fecha2"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><button type="button" id="btn1" onClick="es()" class="btn btn-primary btn-sm">Buscar..</button></td>
    </tr>
  </table>
 </center>
 
  
</div>

</body>
</html>
<script>
function es(){
	var f1=document.getElementById('fecha1').value;
	var f2=document.getElementById('fecha2').value;
	
	window.location='listar.php?f1='+f1+"&f2="+f2;
}
</script>