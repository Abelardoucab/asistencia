<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listado Horario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
#btn2{width:100%;}
</style>
<body>

<div class="container mt-3">
<p><button type="button" id="btn2" onClick="sal()" class="btn btn-primary btn-sm"><h4>Salir</h4></button></p>
  <h2 align="center" style="color:#00F">Listado Horario</h2>
  <p align="center"><img src="../img/logo.jpg" width="179" height="110"></p>
  <p>Introduzca una coincidencia en Buscar...:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
  <br>
  <center><table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Foto</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php $sw=0;
	include '../conectar/link.php';
$conn=mysqli_query($conn,"SELECT * FROM emp ")
or die ("Error a extraer datos");
 while ($sacar=mysqli_fetch_array($conn))
{
	$sw++;
	$nom= $sacar['nom'];
	$ape= $sacar['ape'];
	
	$foto="../file/".$sacar['foto'];

?>
      <tr>
        <td><?php echo $nom ?></td>
        <td><?php echo $ape ?></td>
         <td><img src="<?php echo $foto ?>"  width="45" height="38"></td>
        <td><button type="button" onClick="bus(<?php echo $sacar['ci']; ?> )" class="btn btn-primary btn-sm">Buscar</button></td>
      </tr><?php } ?>
     
    </tbody>
  </table></center>
  
 
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
function bus(xx){alert(xx)
	window.location="../horario/horario.php?ci="+xx;
	
}
function sal(){
		window.history.back();    
	}
</script>

</body>
</html>
